<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116;

use AlibabaCloud\Dara\Models\RuntimeOptions;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ChatRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ChatResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSecurityIPGroupRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSecurityIPGroupResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateSqlLogTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateStorageAnalysisTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteCloudBenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteCloudBenchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteSecurityIPGroupRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteSecurityIPGroupResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteStopGatewayRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DeleteStopGatewayResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAuditLogsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeAuditLogsResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotBigKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeHotKeysResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeInstanceDasProRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeInstanceDasProResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeQueryExplainRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeQueryExplainResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasAgentSSERequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetDasAgentSSEResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportDetailRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportDetailResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportListRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportListResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\KillInstanceAllSessionRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\KillInstanceAllSessionResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifyAutoScalingConfigResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySecurityIPGroupRelationRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySecurityIPGroupRelationResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySecurityIPGroupRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySecurityIPGroupResponse;
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
            'cn-north-2-gov-1' => 'das.aliyuncs.com',
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
     * - If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * - If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * An asynchronous API to access the large language model capabilities of DAS.
     *
     * @remarks
     * Prerequisites:
     * - Use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When you use an SDK to call the DAS service, you must specify the region as cn-shanghai.
     * - You can create offline tasks only for database instances that have DAS Enterprise Edition enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [DAS product editions and features](https://help.aliyun.com/document_detail/156204.html).
     * For more information about using the Chat API with DAS Agent, see [Best practices for DAS Agent interaction (integrating with the Chat API)](https://help.aliyun.com/zh/das/developer-reference/chat-api-best-practice).
     *
     * @param request - ChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield ChatResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * An asynchronous API to access the large language model capabilities of DAS.
     *
     * @remarks
     * Prerequisites:
     * - Use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When you use an SDK to call the DAS service, you must specify the region as cn-shanghai.
     * - You can create offline tasks only for database instances that have DAS Enterprise Edition enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [DAS product editions and features](https://help.aliyun.com/document_detail/156204.html).
     * For more information about using the Chat API with DAS Agent, see [Best practices for DAS Agent interaction (integrating with the Chat API)](https://help.aliyun.com/zh/das/developer-reference/chat-api-best-practice).
     *
     * @param request - ChatRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ChatResponse
     *
     * @param ChatRequest    $request
     * @param RuntimeOptions $runtime
     *
     * @return ChatResponse
     */
    public function chatWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->message) {
            @$query['Message'] = $request->message;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->summary) {
            @$query['Summary'] = $request->summary;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'Chat',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ChatResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * An asynchronous API to access the large language model capabilities of DAS.
     *
     * @remarks
     * Prerequisites:
     * - Use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When you use an SDK to call the DAS service, you must specify the region as cn-shanghai.
     * - You can create offline tasks only for database instances that have DAS Enterprise Edition enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [DAS product editions and features](https://help.aliyun.com/document_detail/156204.html).
     * For more information about using the Chat API with DAS Agent, see [Best practices for DAS Agent interaction (integrating with the Chat API)](https://help.aliyun.com/zh/das/developer-reference/chat-api-best-practice).
     *
     * @param request - ChatRequest
     *
     * @returns ChatResponse
     *
     * @param ChatRequest $request
     *
     * @return ChatResponse
     */
    public function chat($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->chatWithOptions($request, $runtime);
    }

    /**
     * Creates a cache analysis task by calling the CreateCacheAnalysisJob operation.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - Only Redis data structures and the following Tair-developed data structures are supported for analysis: TairString, TairHash, TairGIS, TairBloom, TairDoc, TairCpc, and TairZset. Other Tair-developed data structures are not supported.
     * - If the specifications of the target instance have been changed, backup files generated before the change cannot be analyzed.
     * - Tair ESSD-based instances are not supported.
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
     * Creates a cache analysis task by calling the CreateCacheAnalysisJob operation.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - Only Redis data structures and the following Tair-developed data structures are supported for analysis: TairString, TairHash, TairGIS, TairBloom, TairDoc, TairCpc, and TairZset. Other Tair-developed data structures are not supported.
     * - If the specifications of the target instance have been changed, backup files generated before the change cannot be analyzed.
     * - Tair ESSD-based instances are not supported.
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
     * You can call the CreateCloudBenchTasks operation to create a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides intelligent stress testing to help you verify whether your instance type needs to be scaled out to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). The database must meet the following prerequisites:
     * - The source database only supports RDS MySQL High Availability Edition or RDS Enterprise Edition, and PolarDB MySQL cluster edition.
     * - The target database instance is RDS MySQL or PolarDB MySQL.
     * - The instance is connected to DAS. For more information, see [Connect to Alibaba Cloud database instances](https://help.aliyun.com/document_detail/65405.html).
     * - DAS Enterprise Edition must be enabled. For more information, see [DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
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
     * You can call the CreateCloudBenchTasks operation to create a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides intelligent stress testing to help you verify whether your instance type needs to be scaled out to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). The database must meet the following prerequisites:
     * - The source database only supports RDS MySQL High Availability Edition or RDS Enterprise Edition, and PolarDB MySQL cluster edition.
     * - The target database instance is RDS MySQL or PolarDB MySQL.
     * - The instance is connected to DAS. For more information, see [Connect to Alibaba Cloud database instances](https://help.aliyun.com/document_detail/65405.html).
     * - DAS Enterprise Edition must be enabled. For more information, see [DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
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
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * - The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *   - RDS MySQL
     *   - PolarDB for MySQL
     *   - Redis
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
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * - The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *   - RDS MySQL
     *   - PolarDB for MySQL
     *   - Redis
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
     * Calls the CreateKillInstanceSessionTask operation to create a task that terminates sessions.
     *
     * @remarks
     * - This operation is applicable only to ApsaraDB RDS for MySQL and PolarDB for MySQL instances.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Calls the CreateKillInstanceSessionTask operation to create a task that terminates sessions.
     *
     * @remarks
     * - This operation is applicable only to ApsaraDB RDS for MySQL and PolarDB for MySQL instances.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Creates a recent deadlock analysis task.
     *
     * @remarks
     * This operation creates a recent deadlock analysis task. Database Autonomy Service (DAS) analyzes the most recent deadlock log returned by SHOW ENGINE INNODB STATUS. If multiple deadlocks have occurred, DAS analyzes only the most recent one. For more information, see [Recent deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you begin, make sure the following prerequisites are met:
     * - The database engine is one of the following: ApsaraDB RDS for MySQL, self-managed MySQL, PolarDB for MySQL, or PolarDB-X 2.0.
     * - If you use the China site (Chinese) or DAS SDK, use the latest version.
     * - When you call DAS by using the SDK, set the region to cn-shanghai.
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
     * Creates a recent deadlock analysis task.
     *
     * @remarks
     * This operation creates a recent deadlock analysis task. Database Autonomy Service (DAS) analyzes the most recent deadlock log returned by SHOW ENGINE INNODB STATUS. If multiple deadlocks have occurred, DAS analyzes only the most recent one. For more information, see [Recent deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you begin, make sure the following prerequisites are met:
     * - The database engine is one of the following: ApsaraDB RDS for MySQL, self-managed MySQL, PolarDB for MySQL, or PolarDB-X 2.0.
     * - If you use the China site (Chinese) or DAS SDK, use the latest version.
     * - When you call DAS by using the SDK, set the region to cn-shanghai.
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - ApsaraDB RDS for PostgreSQL
     *   - ApsaraDB RDS for SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (compatible with Oracle)
     *   - ApsaraDB for MongoDB
     * > The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
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
     * - If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - ApsaraDB RDS for PostgreSQL
     *   - ApsaraDB RDS for SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (compatible with Oracle)
     *   - ApsaraDB for MongoDB
     * > The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
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
     * Creates a cross-service whitelist template for a user.
     *
     * @remarks
     * Before you begin:
     * - If you use the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you call DAS by using the SDK, set the region to cn-shanghai.
     * - Only database instances with DAS Enterprise Edition activated support creating batch tasks. For information about the databases and regions supported by each DAS Enterprise Edition version, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     * Limits:
     * The maximum number of concurrent executions is 10.
     *
     * @param request - CreateSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateSecurityIPGroupResponse
     *
     * @param CreateSecurityIPGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return CreateSecurityIPGroupResponse
     */
    public function createSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'CreateSecurityIPGroup',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Creates a cross-service whitelist template for a user.
     *
     * @remarks
     * Before you begin:
     * - If you use the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you call DAS by using the SDK, set the region to cn-shanghai.
     * - Only database instances with DAS Enterprise Edition activated support creating batch tasks. For information about the databases and regions supported by each DAS Enterprise Edition version, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     * Limits:
     * The maximum number of concurrent executions is 10.
     *
     * @param request - CreateSecurityIPGroupRequest
     *
     * @returns CreateSecurityIPGroupResponse
     *
     * @param CreateSecurityIPGroupRequest $request
     *
     * @return CreateSecurityIPGroupResponse
     */
    public function createSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Creates an asynchronous task for detailed data.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When you call DAS operations by using the SDK, set the region to cn-shanghai.
     * - Only database instances with DAS Enterprise Edition enabled support creating batch tasks. For information about the databases and regions supported by each DAS Enterprise Edition version, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     * Rate limit:
     * The maximum number of concurrent tasks is 10.
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
     * Creates an asynchronous task for detailed data.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When you call DAS operations by using the SDK, set the region to cn-shanghai.
     * - Only database instances with DAS Enterprise Edition enabled support creating batch tasks. For information about the databases and regions supported by each DAS Enterprise Edition version, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     * Rate limit:
     * The maximum number of concurrent tasks is 10.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * - For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * - For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Call this API to delete a stress testing task. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Call this API to delete a stress testing task. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Deletes a cross-product whitelist template for a user.
     *
     * @remarks
     * - This operation is used to delete the released DBgateway metadata from intelligent stress testing tasks created by the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * - When using the SDK to call DAS, specify the region as cn-shanghai.
     * > When a DBGateway has no heartbeat with the access point for more than 20 seconds, the DBGateway is in the stopped state.
     *
     * @param request - DeleteSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteSecurityIPGroupResponse
     *
     * @param DeleteSecurityIPGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return DeleteSecurityIPGroupResponse
     */
    public function deleteSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteSecurityIPGroup',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Deletes a cross-product whitelist template for a user.
     *
     * @remarks
     * - This operation is used to delete the released DBgateway metadata from intelligent stress testing tasks created by the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * - When using the SDK to call DAS, specify the region as cn-shanghai.
     * > When a DBGateway has no heartbeat with the access point for more than 20 seconds, the DBGateway is in the stopped state.
     *
     * @param request - DeleteSecurityIPGroupRequest
     *
     * @returns DeleteSecurityIPGroupResponse
     *
     * @param DeleteSecurityIPGroupRequest $request
     *
     * @return DeleteSecurityIPGroupResponse
     */
    public function deleteSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Deletes the metadata of a stopped database gateway.
     *
     * @remarks
     * Call this API to delete metadata for inactive database gateway instances that were created during stress testing created by the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * When you use an SDK to call the DAS service, you must specify the region as `cn-shanghai`.
     * > A database gateway is considered "stopped" if it has not sent a heartbeat to the DAS service for more than 20 seconds.
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
     * Deletes the metadata of a stopped database gateway.
     *
     * @remarks
     * Call this API to delete metadata for inactive database gateway instances that were created during stress testing created by the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * When you use an SDK to call the DAS service, you must specify the region as `cn-shanghai`.
     * > A database gateway is considered "stopped" if it has not sent a heartbeat to the DAS service for more than 20 seconds.
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
     * Queries the list of audit alert logs for alert search and alert handling.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeAuditLogsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeAuditLogsResponse
     *
     * @param DescribeAuditLogsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->asyncRequestId) {
            @$query['AsyncRequestId'] = $request->asyncRequestId;
        }

        if (null !== $request->clientIp) {
            @$query['ClientIp'] = $request->clientIp;
        }

        if (null !== $request->clientUa) {
            @$query['ClientUa'] = $request->clientUa;
        }

        if (null !== $request->currentPage) {
            @$query['CurrentPage'] = $request->currentPage;
        }

        if (null !== $request->databaseName) {
            @$query['DatabaseName'] = $request->databaseName;
        }

        if (null !== $request->effectRowRange) {
            @$query['EffectRowRange'] = $request->effectRowRange;
        }

        if (null !== $request->endTime) {
            @$query['EndTime'] = $request->endTime;
        }

        if (null !== $request->executeTimeRange) {
            @$query['ExecuteTimeRange'] = $request->executeTimeRange;
        }

        if (null !== $request->instanceName) {
            @$query['InstanceName'] = $request->instanceName;
        }

        if (null !== $request->ipType) {
            @$query['IpType'] = $request->ipType;
        }

        if (null !== $request->lang) {
            @$query['Lang'] = $request->lang;
        }

        if (null !== $request->loadWhiteList) {
            @$query['LoadWhiteList'] = $request->loadWhiteList;
        }

        if (null !== $request->logQueryOpJson) {
            @$query['LogQueryOpJson'] = $request->logQueryOpJson;
        }

        if (null !== $request->logSource) {
            @$query['LogSource'] = $request->logSource;
        }

        if (null !== $request->operateType) {
            @$query['OperateType'] = $request->operateType;
        }

        if (null !== $request->ossObjectKey) {
            @$query['OssObjectKey'] = $request->ossObjectKey;
        }

        if (null !== $request->pageSize) {
            @$query['PageSize'] = $request->pageSize;
        }

        if (null !== $request->productCode) {
            @$query['ProductCode'] = $request->productCode;
        }

        if (null !== $request->productId) {
            @$query['ProductId'] = $request->productId;
        }

        if (null !== $request->ruleAggQuery) {
            @$query['RuleAggQuery'] = $request->ruleAggQuery;
        }

        if (null !== $request->ruleCategory) {
            @$query['RuleCategory'] = $request->ruleCategory;
        }

        if (null !== $request->ruleID) {
            @$query['RuleID'] = $request->ruleID;
        }

        if (null !== $request->ruleId) {
            @$query['RuleId'] = $request->ruleId;
        }

        if (null !== $request->ruleName) {
            @$query['RuleName'] = $request->ruleName;
        }

        if (null !== $request->sqlText) {
            @$query['SqlText'] = $request->sqlText;
        }

        if (null !== $request->startTime) {
            @$query['StartTime'] = $request->startTime;
        }

        if (null !== $request->userName) {
            @$query['UserName'] = $request->userName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeAuditLogs',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeAuditLogsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of audit alert logs for alert search and alert handling.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeAuditLogsRequest
     *
     * @returns DescribeAuditLogsResponse
     *
     * @param DescribeAuditLogsRequest $request
     *
     * @return DescribeAuditLogsResponse
     */
    public function describeAuditLogs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAuditLogsWithOptions($request, $runtime);
    }

    /**
     * Queries the configurations of the auto scaling feature for an instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Queries the elastic scaling history of an instance.
     *
     * @remarks
     * - Currently, only the automatic performance scaling history of ApsaraDB RDS for MySQL instances in the high-availability series with cloud disks is supported.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
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
     * Queries the elastic scaling history of an instance.
     *
     * @remarks
     * - Currently, only the automatic performance scaling history of ApsaraDB RDS for MySQL instances in the high-availability series with cloud disks is supported.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
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
     * Returns details of a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis.
     * > Returns the top 500 keys in a cache analysis task.
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
     * Returns details of a cache analysis task.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis.
     * > Returns the top 500 keys in a cache analysis task.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis.
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
     * Queries the list of stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides intelligent stress testing features to help you verify whether your instance specifications need to be scaled up to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Queries the list of stress testing tasks.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides intelligent stress testing features to help you verify whether your instance specifications need to be scaled up to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Database Autonomy Service (DAS) provides stress testing features to help you verify whether your instance specifications need to be scaled up to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Database Autonomy Service (DAS) provides stress testing features to help you verify whether your instance specifications need to be scaled up to effectively handle service traffic peaks. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Retrieves the detailed configuration, file paths, and execution commands for a specific stress test task.
     *
     * @remarks
     * Call this API to get the configuration details of a stress testing task for advanced debugging, or to understand how the Database Autonomy Service (DAS) stress testing feature operates. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Retrieves the detailed configuration, file paths, and execution commands for a specific stress test task.
     *
     * @remarks
     * Call this API to get the configuration details of a stress testing task for advanced debugging, or to understand how the Database Autonomy Service (DAS) stress testing feature operates. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable to the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB for Redis
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable to the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB for Redis
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
     * Queries the error log details of an instance within a specified time range.
     *
     * @remarks
     * This operation queries the error log details of an instance within a specified time range.
     * Before you begin:
     * - The target database engine must be one of the following: ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for MySQL, PolarDB for PostgreSQL, PolarDB for PostgreSQL (Compatible with Oracle), or ApsaraDB for MongoDB.
     * - If you use the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you call DAS operations by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeErrorLogRecordsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeErrorLogRecordsResponse
     *
     * @param DescribeErrorLogRecordsRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecordsWithOptions($request, $runtime)
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

        if (null !== $request->pageNumber) {
            @$body['PageNumber'] = $request->pageNumber;
        }

        if (null !== $request->pageSize) {
            @$body['PageSize'] = $request->pageSize;
        }

        if (null !== $request->role) {
            @$body['Role'] = $request->role;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DescribeErrorLogRecords',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeErrorLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the error log details of an instance within a specified time range.
     *
     * @remarks
     * This operation queries the error log details of an instance within a specified time range.
     * Before you begin:
     * - The target database engine must be one of the following: ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, PolarDB for MySQL, PolarDB for PostgreSQL, PolarDB for PostgreSQL (Compatible with Oracle), or ApsaraDB for MongoDB.
     * - If you use the Alibaba Cloud or DAS SDK, use the latest version.
     * - When you call DAS operations by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeErrorLogRecordsRequest
     *
     * @returns DescribeErrorLogRecordsResponse
     *
     * @param DescribeErrorLogRecordsRequest $request
     *
     * @return DescribeErrorLogRecordsResponse
     */
    public function describeErrorLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeErrorLogRecordsWithOptions($request, $runtime);
    }

    /**
     * Calls the DescribeHotBigKeys operation to retrieve the hot keys and big keys in the current memory in real time.
     *
     * @remarks
     * For keys with data structures of List, Hash, Set, or Zset, the top 3 keys are sorted and displayed by the number of elements in the key, and are recorded as big keys. If the QPS of a key exceeds 5,000, the key is recorded as a hot key. For more information about the definitions of big keys and hot keys, see [Top Key statistics](https://www.alibabacloud.com/help/en/das/user-guide/key-analysis).
     * >
     * > - For instances running Redis Community Edition 7.0.18, 6.0.2.9, 5.5.2.9, or earlier versions, or Tair (Enhanced Edition) in-memory instances running version 5.0.50, 25.2.0.0, or earlier versions, a key with a QPS greater than 3,000 is recorded as a hot key. This threshold cannot be adjusted.
     * - When using the Alibaba Cloud SDK, make sure the version of aliyun-sdk-core is later than 4.3.3. We recommend that you use the latest version.
     * - Use DAS SDK 1.0.2 or later.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *     - The instance is Redis Community Edition or Tair (Redis® OSS-Compatible) in-memory.
     *     - The minor version of the instance is the latest.
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
     * Calls the DescribeHotBigKeys operation to retrieve the hot keys and big keys in the current memory in real time.
     *
     * @remarks
     * For keys with data structures of List, Hash, Set, or Zset, the top 3 keys are sorted and displayed by the number of elements in the key, and are recorded as big keys. If the QPS of a key exceeds 5,000, the key is recorded as a hot key. For more information about the definitions of big keys and hot keys, see [Top Key statistics](https://www.alibabacloud.com/help/en/das/user-guide/key-analysis).
     * >
     * > - For instances running Redis Community Edition 7.0.18, 6.0.2.9, 5.5.2.9, or earlier versions, or Tair (Enhanced Edition) in-memory instances running version 5.0.50, 25.2.0.0, or earlier versions, a key with a QPS greater than 3,000 is recorded as a hot key. This threshold cannot be adjusted.
     * - When using the Alibaba Cloud SDK, make sure the version of aliyun-sdk-core is later than 4.3.3. We recommend that you use the latest version.
     * - Use DAS SDK 1.0.2 or later.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *     - The instance is Redis Community Edition or Tair (Redis® OSS-Compatible) in-memory.
     *     - The minor version of the instance is the latest.
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
     * Queries the hot keys of a Redis instance by calling the DescribeHotKeys operation.
     *
     * @remarks
     * Before you begin:
     * - When using the Alibaba Cloud SDK, make sure the version of aliyun-sdk-core is later than 4.3.3. Use the latest version.
     * - The version of the DAS SDK must be 1.0.2 or later.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *     - The instance is a Redis Community Edition instance or a Tair (Redis® OSS-Compatible) memory-optimized instance.
     *     - The minor engine version of the instance is the latest.
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
     * Queries the hot keys of a Redis instance by calling the DescribeHotKeys operation.
     *
     * @remarks
     * Before you begin:
     * - When using the Alibaba Cloud SDK, make sure the version of aliyun-sdk-core is later than 4.3.3. Use the latest version.
     * - The version of the DAS SDK must be 1.0.2 or later.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *     - The instance is a Redis Community Edition instance or a Tair (Redis® OSS-Compatible) memory-optimized instance.
     *     - The minor engine version of the instance is the latest.
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
     * - For more information about the database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * > We recommend that you call the [DescribeSqlLogConfig](https://help.aliyun.com/document_detail/2778837.html) operation to query the DAS Enterprise Edition configurations of a database instance.
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
     * - For more information about the database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1 and V2.
     * > We recommend that you call the [DescribeSqlLogConfig](https://help.aliyun.com/document_detail/2778837.html) operation to query the DAS Enterprise Edition configurations of a database instance.
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
     * Obtain the execution plan for an SQL statement.
     *
     * @remarks
     * - This operation supports only ApsaraDB RDS for MySQL and PolarDB for MySQL instances.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling the DAS service with the SDK, set the region to cn-shanghai.
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
     * Obtain the execution plan for an SQL statement.
     *
     * @remarks
     * - This operation supports only ApsaraDB RDS for MySQL and PolarDB for MySQL instances.
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling the DAS service with the SDK, set the region to cn-shanghai.
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
     * Displays the details of a cross-engine whitelist template for a user.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeSecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIPGroupResponse
     *
     * @param DescribeSecurityIPGroupRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return DescribeSecurityIPGroupResponse
     */
    public function describeSecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIPGroup',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the details of a cross-engine whitelist template for a user.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeSecurityIPGroupRequest
     *
     * @returns DescribeSecurityIPGroupResponse
     *
     * @param DescribeSecurityIPGroupRequest $request
     *
     * @return DescribeSecurityIPGroupResponse
     */
    public function describeSecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Displays the binding information between a cross-engine whitelist template and instances for a user.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeSecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DescribeSecurityIPGroupRelationResponse
     *
     * @param DescribeSecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                         $runtime
     *
     * @return DescribeSecurityIPGroupRelationResponse
     */
    public function describeSecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'DescribeSecurityIPGroupRelation',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DescribeSecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Displays the binding information between a cross-engine whitelist template and instances for a user.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     *
     * @param request - DescribeSecurityIPGroupRelationRequest
     *
     * @returns DescribeSecurityIPGroupRelationResponse
     *
     * @param DescribeSecurityIPGroupRelationRequest $request
     *
     * @return DescribeSecurityIPGroupRelationResponse
     */
    public function describeSecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * Asynchronously retrieves slow log trends data for an instance.
     *
     * @remarks
     * *Before using this operation, make sure that you fully understand the [billing methods and pricing](https://help.aliyun.com/document_detail/156195.html) of DAS.**
     * Before you begin:
     * - DAS Enterprise Edition or the Alibaba Cloud Managed Services (not yet online) is enabled for the requested instance.
     * - If you use the Alibaba Cloud SDK or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
     * This operation uses asynchronous calls and does not immediately return complete results. If the value of isFinish in the response is false, wait 1 second and invoke the operation again until the value of isFinish is true, which indicates that complete results are returned.
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
     * Asynchronously retrieves slow log trends data for an instance.
     *
     * @remarks
     * *Before using this operation, make sure that you fully understand the [billing methods and pricing](https://help.aliyun.com/document_detail/156195.html) of DAS.**
     * Before you begin:
     * - DAS Enterprise Edition or the Alibaba Cloud Managed Services (not yet online) is enabled for the requested instance.
     * - If you use the Alibaba Cloud SDK or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
     * This operation uses asynchronous calls and does not immediately return complete results. If the value of isFinish in the response is false, wait 1 second and invoke the operation again until the value of isFinish is true, which indicates that complete results are returned.
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
     * Queries slow query log records of a database instance with support for filtering and sorting by multiple conditions.
     *
     * @remarks
     * - `InstanceId` specifies the instance ID. This parameter is required.
     * - `StartTime` and `EndTime` specify the time range for the query. These parameters are required.
     * - Set `PageNumber` and `PageSize` to retrieve results by paging.
     * - Use the `OrderBy` parameter to sort results. For sortable fields, refer to the References.
     * - Use the `Filters` parameter to further refine query conditions, such as filtering by host address or SQL ID.
     * <notice>Certain database types (such as PostgreSQL and PolarDB for PostgreSQL) do not support specific sorting methods. Settings appropriate parameters as needed.</notice>
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
     * Queries slow query log records of a database instance with support for filtering and sorting by multiple conditions.
     *
     * @remarks
     * - `InstanceId` specifies the instance ID. This parameter is required.
     * - `StartTime` and `EndTime` specify the time range for the query. These parameters are required.
     * - Set `PageNumber` and `PageSize` to retrieve results by paging.
     * - Use the `OrderBy` parameter to sort results. For sortable fields, refer to the References.
     * - Use the `Filters` parameter to further refine query conditions, such as filtering by host address or SQL ID.
     * <notice>Certain database types (such as PostgreSQL and PolarDB for PostgreSQL) do not support specific sorting methods. Settings appropriate parameters as needed.</notice>
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
     * Retrieves slow query log statistics.
     *
     * @remarks
     * *Before you call this operation, make sure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/156195.html) of Database Autonomy Service (DAS).**
     * Before you call this operation, make sure that the following requirements are met:
     * - Alibaba Cloud Managed Services is enabled for the instance.
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, set the region to cn-shanghai.
     * This operation is asynchronous and does not return the complete result immediately. If the \\`isFinish\\` parameter in the response is \\`false\\`, wait 1 second and send the request again. Repeat the request until the \\`isFinish\\` parameter is \\`true\\` to retrieve the complete result.
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
     * Retrieves slow query log statistics.
     *
     * @remarks
     * *Before you call this operation, make sure that you understand the [billing methods and pricing](https://help.aliyun.com/document_detail/156195.html) of Database Autonomy Service (DAS).**
     * Before you call this operation, make sure that the following requirements are met:
     * - Alibaba Cloud Managed Services is enabled for the instance.
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, set the region to cn-shanghai.
     * This operation is asynchronous and does not return the complete result immediately. If the \\`isFinish\\` parameter in the response is \\`false\\`, wait 1 second and send the request again. Repeat the request until the \\`isFinish\\` parameter is \\`true\\` to retrieve the complete result.
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
     * Queries the DAS Enterprise Edition configuration of a database instance.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Queries the DAS Enterprise Edition configuration of a database instance.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Call DescribeSqlLogRecords to query log details in DAS Enterprise Edition.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - When you use an Alibaba Cloud or Database Autonomy Service (DAS) SDK, we recommend that you use the latest version.
     * - When you call the DAS service by using an SDK, you must set the region to `cn-shanghai`.
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
     * Call DescribeSqlLogRecords to query log details in DAS Enterprise Edition.
     *
     * @remarks
     * Before calling this operation, note the following:
     * - When you use an Alibaba Cloud or Database Autonomy Service (DAS) SDK, we recommend that you use the latest version.
     * - When you call the DAS service by using an SDK, you must set the region to `cn-shanghai`.
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
     * Invokes the DescribeSqlLogStatistic operation to query the statistics information of DAS Enterprise Edition.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of Alibaba Cloud SDK or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Invokes the DescribeSqlLogStatistic operation to query the statistics information of DAS Enterprise Edition.
     *
     * @remarks
     * Before you begin:
     * - Use the latest version of Alibaba Cloud SDK or DAS SDK.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
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
     * Call the `DescribeSqlLogTask` operation to query the details of an offline task in DAS enterprise edition.
     *
     * @remarks
     * Note the following before you call this operation:
     * - We recommend using the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
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
     * Call the `DescribeSqlLogTask` operation to query the details of an offline task in DAS enterprise edition.
     *
     * @remarks
     * Note the following before you call this operation:
     * - We recommend using the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
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
     * Lists the audit log tasks for an instance.
     *
     * @remarks
     * The following prerequisites must be met to call this operation:
     * - We recommend that you use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When you use an SDK to call the DAS service, you must set the region to `cn-shanghai`.
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
     * Lists the audit log tasks for an instance.
     *
     * @remarks
     * The following prerequisites must be met to call this operation:
     * - We recommend that you use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When you use an SDK to call the DAS service, you must set the region to `cn-shanghai`.
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
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * - The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *   - The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *   - The ApsaraDB for Redis instance is updated to the latest minor version.
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
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * - The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *   - The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *   - The ApsaraDB for Redis instance is updated to the latest minor version.
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
     * Queries the top 100 hot keys within a specified time period.
     *
     * @remarks
     * A key is identified as a hot key if its QPS exceeds 3,000.
     * - If you use an Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is 4.3.3 or later. We recommend using the latest version.
     * - The DAS SDK version must be 1.0.2 or later.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *   - The instance is an open source Redis instance or a Tair (Enterprise Edition) memory-optimized instance.
     *   - The instance runs on the latest minor version.
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
     * Queries the top 100 hot keys within a specified time period.
     *
     * @remarks
     * A key is identified as a hot key if its QPS exceeds 3,000.
     * - If you use an Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is 4.3.3 or later. We recommend using the latest version.
     * - The DAS SDK version must be 1.0.2 or later.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
     * - This operation applies only to the following Redis instances:
     *   - The instance is an open source Redis instance or a Tair (Enterprise Edition) memory-optimized instance.
     *   - The instance runs on the latest minor version.
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - For more information about the database instances that support DAS Enterprise Edition, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1.
     * > We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable or disable DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
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
     * - For more information about the database instances that support DAS Enterprise Edition, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1.
     * > We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable or disable DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis instances.
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to ApsaraDB for Redis instances.
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1.
     * > We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to activate or deactivate DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
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
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation is applicable only to DAS Enterprise Edition V1.
     * > We recommend that you call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to activate or deactivate DAS Enterprise Edition for a database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * > GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the **isFinish** parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the **isFinish** parameter is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Enable and manage DAS Economy Edition and DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
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
     * > GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the **isFinish** parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the **isFinish** parameter is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Enable and manage DAS Economy Edition and DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * - When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
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
     * > GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * > GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * Call GetAsyncErrorRequestStatResult to asynchronously get the execution error count for a specific SQL statement from the SQL Insight results of a database instance.
     *
     * @remarks
     * > This is an asynchronous call, so the complete results are not returned immediately. If the **isFinish** field in the response is **false**, wait 1s and retry the call. The complete results are returned when **isFinish** is **true**.
     * - This operation supports only RDS MySQL and PolarDB for MySQL instances. Before you call this operation, ensure that DAS Enterprise Edition is enabled for the instance. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - When you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * Call GetAsyncErrorRequestStatResult to asynchronously get the execution error count for a specific SQL statement from the SQL Insight results of a database instance.
     *
     * @remarks
     * > This is an asynchronous call, so the complete results are not returned immediately. If the **isFinish** field in the response is **false**, wait 1s and retry the call. The complete results are returned when **isFinish** is **true**.
     * - This operation supports only RDS MySQL and PolarDB for MySQL instances. Before you call this operation, ensure that DAS Enterprise Edition is enabled for the instance. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - When you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call DAS, you must set the region to cn-shanghai.
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * - The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * - The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instance that you want to manage must be of one of the following types:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   - PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instance that you want to manage must be of one of the following types:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   - PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
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
     * Returns details of autonomous notification events for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * > You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
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
     * Returns details of autonomous notification events for a database instance.
     *
     * @remarks
     * Before you call this operation, take note of the following items:
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * > You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * > You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * > You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
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
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * This API uses Server-Sent Events (SSE) to interact with the DAS agent. You can use this API for features such as Q&A and performance diagnostics.
     *
     * @remarks
     * This is a paid API. You are charged based on the number of output characters. Before you use this API, ensure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/das/product-overview/billing-details-of-the-previous-version?spm=a2c4g.11186623.help-menu-63907.d_0_1_0.b7203b87MDNqHO\\&scm=20140722.H_156195._.OR_help-T_cn~zh-V_1#cad160563fbkd) of the DAS Agent product.
     *
     * @param request - GetDasAgentSSERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDasAgentSSEResponse
     *
     * @param GetDasAgentSSERequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDasAgentSSEResponse
     */
    public function getDasAgentSSEWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDasAgentSSE',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield GetDasAgentSSEResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * This API uses Server-Sent Events (SSE) to interact with the DAS agent. You can use this API for features such as Q&A and performance diagnostics.
     *
     * @remarks
     * This is a paid API. You are charged based on the number of output characters. Before you use this API, ensure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/das/product-overview/billing-details-of-the-previous-version?spm=a2c4g.11186623.help-menu-63907.d_0_1_0.b7203b87MDNqHO\\&scm=20140722.H_156195._.OR_help-T_cn~zh-V_1#cad160563fbkd) of the DAS Agent product.
     *
     * @param request - GetDasAgentSSERequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDasAgentSSEResponse
     *
     * @param GetDasAgentSSERequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetDasAgentSSEResponse
     */
    public function getDasAgentSSEWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDasAgentSSE',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDasAgentSSEResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * This API uses Server-Sent Events (SSE) to interact with the DAS agent. You can use this API for features such as Q&A and performance diagnostics.
     *
     * @remarks
     * This is a paid API. You are charged based on the number of output characters. Before you use this API, ensure that you understand the billing methods and [pricing](https://help.aliyun.com/zh/das/product-overview/billing-details-of-the-previous-version?spm=a2c4g.11186623.help-menu-63907.d_0_1_0.b7203b87MDNqHO\\&scm=20140722.H_156195._.OR_help-T_cn~zh-V_1#cad160563fbkd) of the DAS Agent product.
     *
     * @param request - GetDasAgentSSERequest
     *
     * @returns GetDasAgentSSEResponse
     *
     * @param GetDasAgentSSERequest $request
     *
     * @return GetDasAgentSSEResponse
     */
    public function getDasAgentSSE($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasAgentSSEWithOptions($request, $runtime);
    }

    /**
     * Queries the storage usage of DAS Enterprise Edition V1 or V2 for a database instance.
     *
     * @remarks
     * - For information about the supported databases, see [DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When invoking DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to DAS Enterprise Edition V1 and V2.
     * >Use the [DescribeSqlLogStatistic](https://help.aliyun.com/document_detail/2778836.html) operation to query the statistics information of DAS Enterprise Edition.
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
     * Queries the storage usage of DAS Enterprise Edition V1 or V2 for a database instance.
     *
     * @remarks
     * - For information about the supported databases, see [DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When invoking DAS by using the SDK, set the region to cn-shanghai.
     * - This operation applies only to DAS Enterprise Edition V1 and V2.
     * >Use the [DescribeSqlLogStatistic](https://help.aliyun.com/document_detail/2778836.html) operation to query the statistics information of DAS Enterprise Edition.
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
     * Retrieves hot data from SQL audit logs.
     *
     * @remarks
     * Before you call this API, ensure that you meet the following requirements:
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When using an SDK to call the DAS service, specify the region as `cn-shanghai`.
     * - Supported engines: PolarDB MySQL, ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and ApsaraDB RDS for SQLServer.
     * - Enable log indexing for the instance.
     * > The query start time must be within the last 7 days. The query duration cannot exceed 1 day. The API returns up to 10,000 records.
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
     * Retrieves hot data from SQL audit logs.
     *
     * @remarks
     * Before you call this API, ensure that you meet the following requirements:
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When using an SDK to call the DAS service, specify the region as `cn-shanghai`.
     * - Supported engines: PolarDB MySQL, ApsaraDB RDS for MySQL, ApsaraDB RDS for PostgreSQL, and ApsaraDB RDS for SQLServer.
     * - Enable log indexing for the instance.
     * > The query start time must be within the last 7 days. The query duration cannot exceed 1 day. The API returns up to 10,000 records.
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
     * Retrieves the detailed information for a single deadlock event.
     *
     * @remarks
     * This API fetches the full details of a specific deadlock, including the transactions involved, the SQL statements, and the locks held and waited for. The deadlock can be from either a recent analysis or a full historical analysis. For more information, see [Deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you call this operation, ensure the following:
     * - **Supported engines**:
     *   - For recent deadlock analysis: ApsaraDB RDS for MySQL, self-managed MySQL, PolarDB for MySQL, PolarDB-X 2.0.
     *   - For full deadlock analysis: ApsaraDB RDS for MySQL or PolarDB for MySQL with [DAS Economy Edition](https://help.aliyun.com/document_detail/2666482.html) or [DAS Professional Edition](https://help.aliyun.com/document_detail/190912.html) enabled.
     * - **SDK version**: Use the latest version of the Alibaba Cloud SDK.
     * - **Region**: If you call the API via the SDK, set the region ID to `cn-shanghai`.
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
     * Retrieves the detailed information for a single deadlock event.
     *
     * @remarks
     * This API fetches the full details of a specific deadlock, including the transactions involved, the SQL statements, and the locks held and waited for. The deadlock can be from either a recent analysis or a full historical analysis. For more information, see [Deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you call this operation, ensure the following:
     * - **Supported engines**:
     *   - For recent deadlock analysis: ApsaraDB RDS for MySQL, self-managed MySQL, PolarDB for MySQL, PolarDB-X 2.0.
     *   - For full deadlock analysis: ApsaraDB RDS for MySQL or PolarDB for MySQL with [DAS Economy Edition](https://help.aliyun.com/document_detail/2666482.html) or [DAS Professional Edition](https://help.aliyun.com/document_detail/190912.html) enabled.
     * - **SDK version**: Use the latest version of the Alibaba Cloud SDK.
     * - **Region**: If you call the API via the SDK, set the region ID to `cn-shanghai`.
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
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * Retrieves the historical analysis tasks for recent and full deadlock analysis.
     *
     * @remarks
     * Retrieves the historical analysis records for recent and full deadlock analysis. For more information, see [Deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * The following requirements must be met before you call this operation:
     * - To query historical analysis records of recent deadlocks, the destination database engine must be RDS MySQL, self-managed MySQL, PolarDB for MySQL, or PolarDB-X 2.0.
     * - To query historical analysis records of full deadlocks, the destination database engine must be RDS MySQL or PolarDB for MySQL, and [DAS Alibaba Cloud Managed Services (formerly known as Economy Edition)](https://help.aliyun.com/document_detail/2666482.html) must be enabled.
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, set the region to cn-shanghai.
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
     * Retrieves the historical analysis tasks for recent and full deadlock analysis.
     *
     * @remarks
     * Retrieves the historical analysis records for recent and full deadlock analysis. For more information, see [Deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * The following requirements must be met before you call this operation:
     * - To query historical analysis records of recent deadlocks, the destination database engine must be RDS MySQL, self-managed MySQL, PolarDB for MySQL, or PolarDB-X 2.0.
     * - To query historical analysis records of full deadlocks, the destination database engine must be RDS MySQL or PolarDB for MySQL, and [DAS Alibaba Cloud Managed Services (formerly known as Economy Edition)](https://help.aliyun.com/document_detail/2666482.html) must be enabled.
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, set the region to cn-shanghai.
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
     * Queries the deadlock count trend based on full deadlock analysis of error logs within a specified time range.
     *
     * @remarks
     * Invokes this operation to query the deadlock count from full deadlock analysis within a specified time range. DAS periodically analyzes fault logs, parses deadlock information, and collects statistics on deadlock count trends. For details, see [Full deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you begin:
     * - The database DPI engine must be RDS MySQL or PolarDB for MySQL, and [DAS Alibaba Cloud Managed Services (formerly DAS Economy Edition)](https://help.aliyun.com/document_detail/2666482.html) must be enabled.
     * - If you use the China site (aliyun.com) or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
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
     * Queries the deadlock count trend based on full deadlock analysis of error logs within a specified time range.
     *
     * @remarks
     * Invokes this operation to query the deadlock count from full deadlock analysis within a specified time range. DAS periodically analyzes fault logs, parses deadlock information, and collects statistics on deadlock count trends. For details, see [Full deadlock analysis](https://help.aliyun.com/document_detail/2858236.html).
     * Before you begin:
     * - The database DPI engine must be RDS MySQL or PolarDB for MySQL, and [DAS Alibaba Cloud Managed Services (formerly DAS Economy Edition)](https://help.aliyun.com/document_detail/2666482.html) must be enabled.
     * - If you use the China site (aliyun.com) or DAS SDK, use the latest version.
     * - When you invoke DAS by using the SDK, set the region to cn-shanghai.
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
     * Asynchronously queries information about failed SQL queries in SQL Explorer data. You can query up to 20 failed SQL queries within the specific time range.
     *
     * @remarks
     * > GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * > GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * - This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - The database instance that you want to manage is connected to DAS.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - The database instance that you want to manage is connected to DAS.
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
     * - For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
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
     * - For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
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
     * - For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * - For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
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
     * > GetFullRequestStatResultByInstanceId is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the isFinish parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the isFinish parameter is **true**, the complete results are returned.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * - For more information about database instances that support this feature, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
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
     * > GetFullRequestStatResultByInstanceId is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of the isFinish parameter is **false** in the response, wait for 1 second and then send a request again. If the value of the isFinish parameter is **true**, the complete results are returned.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * - For more information about database instances that support this feature, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * - If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - When you call this operation, the value of the SqlId parameter changes due to the optimization of the SQL template algorithm starting from September 1, 2024. For more information, see [[Notice\\] Optimization of the SQL template algorithm](~~2845725~~).
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
     * Retrieves the details of a DAS Agent automated operations report.
     *
     * @remarks
     * Enabling the automated operations report feature for DAS Agent allows the system to perform periodic inspections on target instances and generate reports. Currently, only daily reports are supported. This operation is used to query report details.
     * Before using this operation, ensure that the following prerequisites are met:
     * - DAS Agent is activated and the agent is still within its validity period.
     * - The daily report feature is enabled on the DAS Agent configuration page.
     * - When using the Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is later than 4.3.3. We recommend that you use the latest version.
     * - The version of the DAS SDK is 1.0.3 or later.
     * - When using the SDK to call DAS, set the region to cn-shanghai.
     *
     * @param request - GetInstanceGroupInspectReportDetailRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceGroupInspectReportDetailResponse
     *
     * @param GetInstanceGroupInspectReportDetailRequest $request
     * @param RuntimeOptions                             $runtime
     *
     * @return GetInstanceGroupInspectReportDetailResponse
     */
    public function getInstanceGroupInspectReportDetailWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        $body = [];
        if (null !== $request->reportId) {
            @$body['ReportId'] = $request->reportId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceGroupInspectReportDetail',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceGroupInspectReportDetailResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Retrieves the details of a DAS Agent automated operations report.
     *
     * @remarks
     * Enabling the automated operations report feature for DAS Agent allows the system to perform periodic inspections on target instances and generate reports. Currently, only daily reports are supported. This operation is used to query report details.
     * Before using this operation, ensure that the following prerequisites are met:
     * - DAS Agent is activated and the agent is still within its validity period.
     * - The daily report feature is enabled on the DAS Agent configuration page.
     * - When using the Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is later than 4.3.3. We recommend that you use the latest version.
     * - The version of the DAS SDK is 1.0.3 or later.
     * - When using the SDK to call DAS, set the region to cn-shanghai.
     *
     * @param request - GetInstanceGroupInspectReportDetailRequest
     *
     * @returns GetInstanceGroupInspectReportDetailResponse
     *
     * @param GetInstanceGroupInspectReportDetailRequest $request
     *
     * @return GetInstanceGroupInspectReportDetailResponse
     */
    public function getInstanceGroupInspectReportDetail($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceGroupInspectReportDetailWithOptions($request, $runtime);
    }

    /**
     * Queries the list of O&M reports generated by DAS Agent.
     *
     * @remarks
     * Enabling the O&M report feature of DAS Agent allows the system to perform periodic inspections on target instances and generate reports. Currently, only daily reports are supported.
     * Before you begin:
     * - Activate DAS Agent and ensure that the Agent is still within its validity period.
     * - Enable the daily report feature on the DAS Agent configuration page.
     * - When using the Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is later than 4.3.3. Use the latest version.
     * - Use DAS SDK 1.0.3 or later.
     * - When calling DAS by using the SDK, set the region to ap-southeast-1.
     *
     * @param request - GetInstanceGroupInspectReportListRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetInstanceGroupInspectReportListResponse
     *
     * @param GetInstanceGroupInspectReportListRequest $request
     * @param RuntimeOptions                           $runtime
     *
     * @return GetInstanceGroupInspectReportListResponse
     */
    public function getInstanceGroupInspectReportListWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->agentId) {
            @$query['AgentId'] = $request->agentId;
        }

        if (null !== $request->groupId) {
            @$query['GroupId'] = $request->groupId;
        }

        if (null !== $request->reportType) {
            @$query['ReportType'] = $request->reportType;
        }

        $body = [];
        if (null !== $request->endTime) {
            @$body['EndTime'] = $request->endTime;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
            'body' => Utils::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'GetInstanceGroupInspectReportList',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetInstanceGroupInspectReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the list of O&M reports generated by DAS Agent.
     *
     * @remarks
     * Enabling the O&M report feature of DAS Agent allows the system to perform periodic inspections on target instances and generate reports. Currently, only daily reports are supported.
     * Before you begin:
     * - Activate DAS Agent and ensure that the Agent is still within its validity period.
     * - Enable the daily report feature on the DAS Agent configuration page.
     * - When using the Alibaba Cloud SDK, ensure that the version of aliyun-sdk-core is later than 4.3.3. Use the latest version.
     * - Use DAS SDK 1.0.3 or later.
     * - When calling DAS by using the SDK, set the region to ap-southeast-1.
     *
     * @param request - GetInstanceGroupInspectReportListRequest
     *
     * @returns GetInstanceGroupInspectReportListResponse
     *
     * @param GetInstanceGroupInspectReportListRequest $request
     *
     * @return GetInstanceGroupInspectReportListResponse
     */
    public function getInstanceGroupInspectReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceGroupInspectReportListWithOptions($request, $runtime);
    }

    /**
     * Queries the result of an inspection that is performed on a database instance by using the inspection and scoring feature.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the inspection and scoring feature. This feature allows you to inspect and score the health status of your instance on a regular basis. This helps you obtain information about the status of your databases. For more information, see [Inspection and scoring](https://help.aliyun.com/document_detail/205659.html).
     * Before you call this operation, take note of the following items:
     * - This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * - The version of DAS SDK must be V1.0.3 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * - The version of DAS SDK must be V1.0.3 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Returns details of all missing indexes for an instance.
     *
     * @remarks
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * Returns details of all missing indexes for an instance.
     *
     * @remarks
     * - This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to MongoDB instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
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
     * - This operation is applicable only to MongoDB instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
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
     * > GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * > GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * - The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * - The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * - The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * - The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
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
     * Call the GetPfsSqlSummaries API to query all request data using the SQL ID dimension in Performance Insight (New Version) for a database instance.
     *
     * @remarks
     * Prerequisites for using this API:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling the DAS service using the SDK, specify the region as cn-shanghai.
     * - The target database instance is RDS MySQL or PolarDB MySQL.
     * - The target database instance has Performance Insight (New Version) enabled. For more information, see [Performance Insight (New Version)](https://help.aliyun.com/document_detail/469117.html).
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
     * Call the GetPfsSqlSummaries API to query all request data using the SQL ID dimension in Performance Insight (New Version) for a database instance.
     *
     * @remarks
     * Prerequisites for using this API:
     * - Use the latest version of the Alibaba Cloud or DAS SDK.
     * - When calling the DAS service using the SDK, specify the region as cn-shanghai.
     * - The target database instance is RDS MySQL or PolarDB MySQL.
     * - The target database instance has Performance Insight (New Version) enabled. For more information, see [Performance Insight (New Version)](https://help.aliyun.com/document_detail/469117.html).
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
     * Returns SQL template statistics from query governance data.
     *
     * @remarks
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * Returns SQL template statistics from query governance data.
     *
     * @remarks
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * Returns the best- and worst-performing instances based on query governance data.
     *
     * @remarks
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * Returns the best- and worst-performing instances based on query governance data.
     *
     * @remarks
     * - If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeExecErrorSample',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
        $query = [];
        if (null !== $request->asc) {
            @$query['Asc'] = $request->asc;
        }

        if (null !== $request->dbNames) {
            @$query['DbNames'] = $request->dbNames;
        }

        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceIds) {
            @$query['InstanceIds'] = $request->instanceIds;
        }

        if (null !== $request->keywords) {
            @$query['Keywords'] = $request->keywords;
        }

        if (null !== $request->logicalOperator) {
            @$query['LogicalOperator'] = $request->logicalOperator;
        }

        if (null !== $request->onlyOptimizedSql) {
            @$query['OnlyOptimizedSql'] = $request->onlyOptimizedSql;
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

        if (null !== $request->region) {
            @$query['Region'] = $request->region;
        }

        if (null !== $request->rules) {
            @$query['Rules'] = $request->rules;
        }

        if (null !== $request->sqlIds) {
            @$query['SqlIds'] = $request->sqlIds;
        }

        if (null !== $request->tagNames) {
            @$query['TagNames'] = $request->tagNames;
        }

        if (null !== $request->time) {
            @$query['Time'] = $request->time;
        }

        if (null !== $request->user) {
            @$query['User'] = $request->user;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeShareUrl',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     * - If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->ruleIds) {
            @$query['RuleIds'] = $request->ruleIds;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeSolution',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
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
     * - If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - PolarDB for MySQL
     *   - ApsaraDB RDS for PostgreSQL
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
     * Queries the tags of a specified SQL statement by calling the GetQueryOptimizeTag operation.
     *
     * @remarks
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *     - RDS MySQL
     *     - PolarDB for MySQL
     *     - RDS PostgreSQL
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
        $query = [];
        if (null !== $request->engine) {
            @$query['Engine'] = $request->engine;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->sqlId) {
            @$query['SqlId'] = $request->sqlId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetQueryOptimizeTag',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetQueryOptimizeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Queries the tags of a specified SQL statement by calling the GetQueryOptimizeTag operation.
     *
     * @remarks
     * - When using the Alibaba Cloud or DAS SDK, use the latest version.
     * - When calling DAS by using the SDK, set the region to cn-shanghai.
     * - This operation supports the following database engines:
     *     - RDS MySQL
     *     - PolarDB for MySQL
     *     - RDS PostgreSQL
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
     * - This operation is applicable only to ApsaraDB for Redis instances.
     * - If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * > This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
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
     * - This operation is applicable only to ApsaraDB for Redis instances.
     * - If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * > This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - ApsaraDB RDS for PostgreSQL
     *   - ApsaraDB RDS for SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (Compatible with Oracle)
     *   - ApsaraDB for MongoDB
     * > The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL
     *   - ApsaraDB RDS for PostgreSQL
     *   - ApsaraDB RDS for SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (Compatible with Oracle)
     *   - ApsaraDB for MongoDB
     * > The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
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
     * Call GetRequestDiagnosisResult to retrieve the SQL diagnosis results.
     *
     * @remarks
     * This API has the following prerequisites:
     * - When you use an SDK to call the DAS service, you must set the region to cn-shanghai.
     * - This API does not support querying diagnosis results for automatic SQL optimization.
     * - This API supports the following database engines:
     *   - RDS MySQL
     *   - RDS PostgreSQL
     *   - RDS SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (Oracle-Compatible)
     *   - ApsaraDB for MongoDB
     * > RDS PostgreSQL instances require minor kernel version 20220130 or later. To view and upgrade the minor kernel version, see [Upgrade the minor kernel version](https://help.aliyun.com/document_detail/146895.html).
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
     * Call GetRequestDiagnosisResult to retrieve the SQL diagnosis results.
     *
     * @remarks
     * This API has the following prerequisites:
     * - When you use an SDK to call the DAS service, you must set the region to cn-shanghai.
     * - This API does not support querying diagnosis results for automatic SQL optimization.
     * - This API supports the following database engines:
     *   - RDS MySQL
     *   - RDS PostgreSQL
     *   - RDS SQL Server
     *   - PolarDB for MySQL
     *   - PolarDB for PostgreSQL (Oracle-Compatible)
     *   - ApsaraDB for MongoDB
     * > RDS PostgreSQL instances require minor kernel version 20220130 or later. To view and upgrade the minor kernel version, see [Upgrade the minor kernel version](https://help.aliyun.com/document_detail/146895.html).
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * - ApsaraDB RDS for MySQL
     * - PolarDB for MySQL
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
     * > Returns only optimization suggestions that the SQL diagnostics feature automatically generates.
     * Before you call this operation, take note of the following items:
     * - This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * > Returns only optimization suggestions that the SQL diagnostics feature automatically generates.
     * Before you call this operation, take note of the following items:
     * - This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * > The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * - For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * > The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * - This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * - For ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters, this operation works the same as the storage analysis feature of the previous version. Tasks generated by this operation cannot be viewed on the Storage Analysis page of the new version in the Database Autonomy Service (DAS) console. If you want to view the tasks and results, call the related API operation to obtain data and save data to your computer.
     * - If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Provides the Alibaba Cloud ApsaraDB Agent foundation model capability interface for AI chat, performance diagnostics, and other features.
     *
     * @param request - GetYaoChiAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYaoChiAgentResponse
     *
     * @param GetYaoChiAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetYaoChiAgentResponse
     */
    public function getYaoChiAgentWithSSE($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->imageKeys) {
            @$query['ImageKeys'] = $request->imageKeys;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYaoChiAgent',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);
        $sseResp = $this->callSSEApi($params, $req, $runtime);

        foreach ($sseResp as $resp) {
            if (null !== $resp->event && null !== $resp->event->data) {
                $data = json_decode($resp->event->data, true);

                yield GetYaoChiAgentResponse::fromMap([
                    'statusCode' => $resp->statusCode,
                    'headers' => $resp->headers,
                    'id' => $resp->event->id,
                    'event' => $resp->event->event,
                    'body' => $data,
                ]);
            }
        }
    }

    /**
     * Provides the Alibaba Cloud ApsaraDB Agent foundation model capability interface for AI chat, performance diagnostics, and other features.
     *
     * @param request - GetYaoChiAgentRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetYaoChiAgentResponse
     *
     * @param GetYaoChiAgentRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return GetYaoChiAgentResponse
     */
    public function getYaoChiAgentWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->extraInfo) {
            @$query['ExtraInfo'] = $request->extraInfo;
        }

        if (null !== $request->imageKeys) {
            @$query['ImageKeys'] = $request->imageKeys;
        }

        if (null !== $request->query) {
            @$query['Query'] = $request->query;
        }

        if (null !== $request->sessionId) {
            @$query['SessionId'] = $request->sessionId;
        }

        if (null !== $request->source) {
            @$query['Source'] = $request->source;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'GetYaoChiAgent',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetYaoChiAgentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Provides the Alibaba Cloud ApsaraDB Agent foundation model capability interface for AI chat, performance diagnostics, and other features.
     *
     * @param request - GetYaoChiAgentRequest
     *
     * @returns GetYaoChiAgentResponse
     *
     * @param GetYaoChiAgentRequest $request
     *
     * @return GetYaoChiAgentResponse
     */
    public function getYaoChiAgent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getYaoChiAgentWithOptions($request, $runtime);
    }

    /**
     * Terminates all sessions on an instance.
     *
     * @remarks
     * - This operation is applicable only to ApsaraDB for Redis.
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * - This operation is applicable only to ApsaraDB for Redis.
     * - If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * - The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Modifies the following auto scaling configurations for an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
     * - You can modify the configurations of the **auto scaling feature for specifications** for the following types of database instances:
     *   - PolarDB for MySQL Cluster Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     *   - ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or enhanced SSDs (ESSDs). For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * - You can modify the configurations of the **automatic storage expansion** feature for the following types of database instances:
     *   - ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs. For more information about the feature and the billing rules, see [Automatic space expansion](https://help.aliyun.com/document_detail/173345.html).
     * - You can modify the configurations of the **automatic bandwidth adjustment** feature for the following types of database instances:
     *   - ApsaraDB for Redis Classic (Local Disk-based) Edition instances. For more information about the feature and the billing rules, see [Automatic bandwidth adjustment](https://help.aliyun.com/document_detail/216312.html).
     * - You can modify the configurations of the **auto scaling feature for resources** for the following types of database instances:
     *   - General-purpose ApsaraDB RDS for MySQL Enterprise Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Modifies the following auto scaling configurations for an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
     * - You can modify the configurations of the **auto scaling feature for specifications** for the following types of database instances:
     *   - PolarDB for MySQL Cluster Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     *   - ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or enhanced SSDs (ESSDs). For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * - You can modify the configurations of the **automatic storage expansion** feature for the following types of database instances:
     *   - ApsaraDB RDS for MySQL High-availability Edition instances that use standard SSDs or ESSDs. For more information about the feature and the billing rules, see [Automatic space expansion](https://help.aliyun.com/document_detail/173345.html).
     * - You can modify the configurations of the **automatic bandwidth adjustment** feature for the following types of database instances:
     *   - ApsaraDB for Redis Classic (Local Disk-based) Edition instances. For more information about the feature and the billing rules, see [Automatic bandwidth adjustment](https://help.aliyun.com/document_detail/216312.html).
     * - You can modify the configurations of the **auto scaling feature for resources** for the following types of database instances:
     *   - General-purpose ApsaraDB RDS for MySQL Enterprise Edition instances. For more information about the feature and the billing rules, see [Automatic performance scaling](https://help.aliyun.com/document_detail/169686.html).
     * - If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * - If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
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
     * Modifies a cross-product whitelist template.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, specify the cn-shanghai region.
     * - This operation uses the latest supported version by default. For more information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - ModifySecurityIPGroupRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIPGroupResponse
     *
     * @param ModifySecurityIPGroupRequest $request
     * @param RuntimeOptions               $runtime
     *
     * @return ModifySecurityIPGroupResponse
     */
    public function modifySecurityIPGroupWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->GIpList) {
            @$query['GIpList'] = $request->GIpList;
        }

        if (null !== $request->globalIgName) {
            @$query['GlobalIgName'] = $request->globalIgName;
        }

        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIPGroup',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityIPGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Modifies a cross-product whitelist template.
     *
     * @remarks
     * Before you call this operation, note the following:
     * - Use the latest version of the Alibaba Cloud SDK or DAS SDK.
     * - When you use an SDK to call the DAS service, specify the cn-shanghai region.
     * - This operation uses the latest supported version by default. For more information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *
     * @param request - ModifySecurityIPGroupRequest
     *
     * @returns ModifySecurityIPGroupResponse
     *
     * @param ModifySecurityIPGroupRequest $request
     *
     * @return ModifySecurityIPGroupResponse
     */
    public function modifySecurityIPGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPGroupWithOptions($request, $runtime);
    }

    /**
     * Attaches or detaches a cross-product whitelist template.
     *
     * @remarks
     * - Use the latest version of the Alibaba Cloud or DAS software development kit (SDK).
     * - When you use the SDK to call the DAS service, set the region to cn-shanghai.
     * - For more information about the supported database instances, see [Overview of features](https://help.aliyun.com/document_detail/92561.html) for SQL Insight and Audit.
     * - The SQL Insight and Audit (Legacy) feature is enabled for the destination database instance. For more information about how to enable this feature, see [Enable SQL Insight and Audit](https://help.aliyun.com/document_detail/92561.html).
     *
     * @param request - ModifySecurityIPGroupRelationRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ModifySecurityIPGroupRelationResponse
     *
     * @param ModifySecurityIPGroupRelationRequest $request
     * @param RuntimeOptions                       $runtime
     *
     * @return ModifySecurityIPGroupRelationResponse
     */
    public function modifySecurityIPGroupRelationWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->globalSecurityGroupId) {
            @$query['GlobalSecurityGroupId'] = $request->globalSecurityGroupId;
        }

        if (null !== $request->instanceId) {
            @$query['InstanceId'] = $request->instanceId;
        }

        if (null !== $request->regionName) {
            @$query['RegionName'] = $request->regionName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
        ]);
        $params = new Params([
            'action' => 'ModifySecurityIPGroupRelation',
            'version' => '2020-01-16',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ModifySecurityIPGroupRelationResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * Attaches or detaches a cross-product whitelist template.
     *
     * @remarks
     * - Use the latest version of the Alibaba Cloud or DAS software development kit (SDK).
     * - When you use the SDK to call the DAS service, set the region to cn-shanghai.
     * - For more information about the supported database instances, see [Overview of features](https://help.aliyun.com/document_detail/92561.html) for SQL Insight and Audit.
     * - The SQL Insight and Audit (Legacy) feature is enabled for the destination database instance. For more information about how to enable this feature, see [Enable SQL Insight and Audit](https://help.aliyun.com/document_detail/92561.html).
     *
     * @param request - ModifySecurityIPGroupRelationRequest
     *
     * @returns ModifySecurityIPGroupRelationResponse
     *
     * @param ModifySecurityIPGroupRelationRequest $request
     *
     * @return ModifySecurityIPGroupRelationResponse
     */
    public function modifySecurityIPGroupRelation($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySecurityIPGroupRelationWithOptions($request, $runtime);
    }

    /**
     * Use the `ModifySqlLogConfig` operation to enable or configure DAS Enterprise Edition for a database instance.
     *
     * @remarks
     * Before calling this operation, ensure you meet the following requirements:
     * - Use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
     * - This operation enables the latest supported version of DAS Enterprise Edition by default. See [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html) for the databases and regions supported by each version of DAS Enterprise Edition.
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
     * Use the `ModifySqlLogConfig` operation to enable or configure DAS Enterprise Edition for a database instance.
     *
     * @remarks
     * Before calling this operation, ensure you meet the following requirements:
     * - Use the latest version of the Alibaba Cloud SDK or the DAS SDK.
     * - When calling the DAS service with an SDK, set the region to cn-shanghai.
     * - This operation enables the latest supported version of DAS Enterprise Edition by default. See [DAS editions and supported features](https://help.aliyun.com/document_detail/156204.html) for the databases and regions supported by each version of DAS Enterprise Edition.
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
     * Calls the RunCloudBenchTask operation to execute a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you determine whether your instance type needs to be scaled out to handle peak service traffic. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * Calls the RunCloudBenchTask operation to execute a stress testing task.
     *
     * @remarks
     * Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you determine whether your instance type needs to be scaled out to handle peak service traffic. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
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
     * > Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.\\*\\*\\*\\* In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * - If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * - DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * - The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
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
     * > Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.\\*\\*\\*\\* In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * - If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * - DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * - The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * - The autonomy service must be enabled for the database instance. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *   - PolarDB for MySQL Cluster Edition
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
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * - The autonomy service must be enabled for the database instance. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * - This operation supports the following database engines:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *   - PolarDB for MySQL Cluster Edition
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
     * > Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.\\*\\*\\*\\* In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * - The database instance that you want to manage must be of one of the following types:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   - PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
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
     * > Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.\\*\\*\\*\\* In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * - If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * - The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * - The database instance that you want to manage must be of one of the following types:
     *   - ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *   - PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
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
