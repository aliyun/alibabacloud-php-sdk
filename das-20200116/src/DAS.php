<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\AddHDMInstanceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateAdamBenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\CreateAdamBenchTaskResponse;
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
use AlibabaCloud\SDK\DAS\V20200116\Models\StopCloudBenchTaskRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\StopCloudBenchTaskResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\SyncHDMAliyunResourceRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\SyncHDMAliyunResourceResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoResourceOptimizeRulesAsyncResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoSqlOptimizeStatusRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoSqlOptimizeStatusResponse;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncRequest;
use AlibabaCloud\SDK\DAS\V20200116\Models\UpdateAutoThrottleRulesAsyncResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class DAS extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = 'central';
        $this->_endpointMap  = [
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
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @summary Adds a database instance to Database Autonomy Service (DAS).
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *  *
     * @param AddHDMInstanceRequest $request AddHDMInstanceRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return AddHDMInstanceResponse AddHDMInstanceResponse
     */
    public function addHDMInstanceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->flushAccount)) {
            $query['FlushAccount'] = $request->flushAccount;
        }
        if (!Utils::isUnset($request->instanceAlias)) {
            $query['InstanceAlias'] = $request->instanceAlias;
        }
        if (!Utils::isUnset($request->instanceArea)) {
            $query['InstanceArea'] = $request->instanceArea;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ip)) {
            $query['Ip'] = $request->ip;
        }
        if (!Utils::isUnset($request->networkType)) {
            $query['NetworkType'] = $request->networkType;
        }
        if (!Utils::isUnset($request->password)) {
            $query['Password'] = $request->password;
        }
        if (!Utils::isUnset($request->port)) {
            $query['Port'] = $request->port;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->username)) {
            $query['Username'] = $request->username;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $query['VpcId'] = $request->vpcId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'AddHDMInstance',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AddHDMInstanceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a database instance to Database Autonomy Service (DAS).
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *  *
     * @param AddHDMInstanceRequest $request AddHDMInstanceRequest
     *
     * @return AddHDMInstanceResponse AddHDMInstanceResponse
     */
    public function addHDMInstance($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->addHDMInstanceWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a stress testing task on Advanced Database & Application Migration (ADAM).
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. You can create an Advanced Database & Application Migration (ADAM) stress testing task to check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     * Make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition or X-Engine Edition cluster.
     * *   The destination instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *  *
     * @param CreateAdamBenchTaskRequest $request CreateAdamBenchTaskRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAdamBenchTaskResponse CreateAdamBenchTaskResponse
     */
    public function createAdamBenchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dstInstanceId)) {
            $query['DstInstanceId'] = $request->dstInstanceId;
        }
        if (!Utils::isUnset($request->dstSuperAccount)) {
            $query['DstSuperAccount'] = $request->dstSuperAccount;
        }
        if (!Utils::isUnset($request->dstSuperPassword)) {
            $query['DstSuperPassword'] = $request->dstSuperPassword;
        }
        if (!Utils::isUnset($request->rate)) {
            $query['Rate'] = $request->rate;
        }
        if (!Utils::isUnset($request->requestDuration)) {
            $query['RequestDuration'] = $request->requestDuration;
        }
        if (!Utils::isUnset($request->requestStartTime)) {
            $query['RequestStartTime'] = $request->requestStartTime;
        }
        if (!Utils::isUnset($request->srcEngine)) {
            $query['SrcEngine'] = $request->srcEngine;
        }
        if (!Utils::isUnset($request->srcEngineVersion)) {
            $query['SrcEngineVersion'] = $request->srcEngineVersion;
        }
        if (!Utils::isUnset($request->srcMaxQps)) {
            $query['SrcMaxQps'] = $request->srcMaxQps;
        }
        if (!Utils::isUnset($request->srcMeanQps)) {
            $query['SrcMeanQps'] = $request->srcMeanQps;
        }
        if (!Utils::isUnset($request->srcSqlOssAddr)) {
            $query['SrcSqlOssAddr'] = $request->srcSqlOssAddr;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateAdamBenchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAdamBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a stress testing task on Advanced Database & Application Migration (ADAM).
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. You can create an Advanced Database & Application Migration (ADAM) stress testing task to check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     * Make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition or X-Engine Edition cluster.
     * *   The destination instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *  *
     * @param CreateAdamBenchTaskRequest $request CreateAdamBenchTaskRequest
     *
     * @return CreateAdamBenchTaskResponse CreateAdamBenchTaskResponse
     */
    public function createAdamBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAdamBenchTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a cache analysis task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis Community Edition instances and performance-enhanced instances of the ApsaraDB for Redis Enhanced Edition (Tair).
     * >  Redis 7.0 is not supported. You are not allowed to use custom modules.
     *  *
     * @param CreateCacheAnalysisJobRequest $request CreateCacheAnalysisJobRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCacheAnalysisJobResponse CreateCacheAnalysisJobResponse
     */
    public function createCacheAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->backupSetId)) {
            $query['BackupSetId'] = $request->backupSetId;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->separators)) {
            $query['Separators'] = $request->separators;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCacheAnalysisJob',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCacheAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a cache analysis task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis Community Edition instances and performance-enhanced instances of the ApsaraDB for Redis Enhanced Edition (Tair).
     * >  Redis 7.0 is not supported. You are not allowed to use custom modules.
     *  *
     * @param CreateCacheAnalysisJobRequest $request CreateCacheAnalysisJobRequest
     *
     * @return CreateCacheAnalysisJobResponse CreateCacheAnalysisJobResponse
     */
    public function createCacheAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCacheAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @summary Creates stress testing tasks.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). Before you call this API operation, make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition or X-Engine Edition cluster.
     * *   The destination database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *  *
     * @param CreateCloudBenchTasksRequest $request CreateCloudBenchTasksRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateCloudBenchTasksResponse CreateCloudBenchTasksResponse
     */
    public function createCloudBenchTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->backupId)) {
            $query['BackupId'] = $request->backupId;
        }
        if (!Utils::isUnset($request->backupTime)) {
            $query['BackupTime'] = $request->backupTime;
        }
        if (!Utils::isUnset($request->clientType)) {
            $query['ClientType'] = $request->clientType;
        }
        if (!Utils::isUnset($request->description)) {
            $query['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->dstConnectionString)) {
            $query['DstConnectionString'] = $request->dstConnectionString;
        }
        if (!Utils::isUnset($request->dstInstanceId)) {
            $query['DstInstanceId'] = $request->dstInstanceId;
        }
        if (!Utils::isUnset($request->dstPort)) {
            $query['DstPort'] = $request->dstPort;
        }
        if (!Utils::isUnset($request->dstSuperAccount)) {
            $query['DstSuperAccount'] = $request->dstSuperAccount;
        }
        if (!Utils::isUnset($request->dstSuperPassword)) {
            $query['DstSuperPassword'] = $request->dstSuperPassword;
        }
        if (!Utils::isUnset($request->dstType)) {
            $query['DstType'] = $request->dstType;
        }
        if (!Utils::isUnset($request->dtsJobClass)) {
            $query['DtsJobClass'] = $request->dtsJobClass;
        }
        if (!Utils::isUnset($request->dtsJobId)) {
            $query['DtsJobId'] = $request->dtsJobId;
        }
        if (!Utils::isUnset($request->endState)) {
            $query['EndState'] = $request->endState;
        }
        if (!Utils::isUnset($request->gatewayVpcId)) {
            $query['GatewayVpcId'] = $request->gatewayVpcId;
        }
        if (!Utils::isUnset($request->gatewayVpcIp)) {
            $query['GatewayVpcIp'] = $request->gatewayVpcIp;
        }
        if (!Utils::isUnset($request->rate)) {
            $query['Rate'] = $request->rate;
        }
        if (!Utils::isUnset($request->requestDuration)) {
            $query['RequestDuration'] = $request->requestDuration;
        }
        if (!Utils::isUnset($request->requestEndTime)) {
            $query['RequestEndTime'] = $request->requestEndTime;
        }
        if (!Utils::isUnset($request->requestStartTime)) {
            $query['RequestStartTime'] = $request->requestStartTime;
        }
        if (!Utils::isUnset($request->smartPressureTime)) {
            $query['SmartPressureTime'] = $request->smartPressureTime;
        }
        if (!Utils::isUnset($request->srcInstanceId)) {
            $query['SrcInstanceId'] = $request->srcInstanceId;
        }
        if (!Utils::isUnset($request->srcPublicIp)) {
            $query['SrcPublicIp'] = $request->srcPublicIp;
        }
        if (!Utils::isUnset($request->srcSuperAccount)) {
            $query['SrcSuperAccount'] = $request->srcSuperAccount;
        }
        if (!Utils::isUnset($request->srcSuperPassword)) {
            $query['SrcSuperPassword'] = $request->srcSuperPassword;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        if (!Utils::isUnset($request->workDir)) {
            $query['WorkDir'] = $request->workDir;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateCloudBenchTasks',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateCloudBenchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates stress testing tasks.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html). Before you call this API operation, make sure that your database instances meet the following requirements:
     * *   The source database instance is an ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance, or a PolarDB for MySQL Cluster Edition or X-Engine Edition cluster.
     * *   The destination database instance is an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL instance.
     * *   The source and destination database instances are connected to DAS. For information about how to connect database instances to DAS, see [Connect an Alibaba Cloud database instance to DAS](https://help.aliyun.com/document_detail/65405.html).
     * *   DAS Enterprise Edition is enabled for the source and destination database instances. For more information, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     *  *
     * @param CreateCloudBenchTasksRequest $request CreateCloudBenchTasksRequest
     *
     * @return CreateCloudBenchTasksResponse CreateCloudBenchTasksResponse
     */
    public function createCloudBenchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createCloudBenchTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a diagnostic report.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   RDS MySQL
     *     *   PolarDB for MySQL
     *     *   Redis
     *  *
     * @param CreateDiagnosticReportRequest $request CreateDiagnosticReportRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateDiagnosticReportResponse CreateDiagnosticReportResponse
     */
    public function createDiagnosticReportWithOptions($request, $runtime)
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
            'action'      => 'CreateDiagnosticReport',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateDiagnosticReportResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a diagnostic report.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.3 or later.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   RDS MySQL
     *     *   PolarDB for MySQL
     *     *   Redis
     *  *
     * @param CreateDiagnosticReportRequest $request CreateDiagnosticReportRequest
     *
     * @return CreateDiagnosticReportResponse CreateDiagnosticReportResponse
     */
    public function createDiagnosticReport($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createDiagnosticReportWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a task that terminates sessions.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param CreateKillInstanceSessionTaskRequest $request CreateKillInstanceSessionTaskRequest
     * @param RuntimeOptions                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKillInstanceSessionTaskResponse CreateKillInstanceSessionTaskResponse
     */
    public function createKillInstanceSessionTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbUser)) {
            $query['DbUser'] = $request->dbUser;
        }
        if (!Utils::isUnset($request->dbUserPassword)) {
            $query['DbUserPassword'] = $request->dbUserPassword;
        }
        if (!Utils::isUnset($request->ignoredUsers)) {
            $query['IgnoredUsers'] = $request->ignoredUsers;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->killAllSessions)) {
            $query['KillAllSessions'] = $request->killAllSessions;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sessionIds)) {
            $query['SessionIds'] = $request->sessionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKillInstanceSessionTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKillInstanceSessionTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a task that terminates sessions.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param CreateKillInstanceSessionTaskRequest $request CreateKillInstanceSessionTaskRequest
     *
     * @return CreateKillInstanceSessionTaskResponse CreateKillInstanceSessionTaskResponse
     */
    public function createKillInstanceSessionTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKillInstanceSessionTaskWithOptions($request, $runtime);
    }

    /**
     * @summary 创建结束会话的任务
     *  *
     * @param CreateKillInstanceSessionTaskWithMaintainUserRequest $request CreateKillInstanceSessionTaskWithMaintainUserRequest
     * @param RuntimeOptions                                       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateKillInstanceSessionTaskWithMaintainUserResponse CreateKillInstanceSessionTaskWithMaintainUserResponse
     */
    public function createKillInstanceSessionTaskWithMaintainUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->ignoredUsers)) {
            $query['IgnoredUsers'] = $request->ignoredUsers;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->killAllSessions)) {
            $query['KillAllSessions'] = $request->killAllSessions;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sessionIds)) {
            $query['SessionIds'] = $request->sessionIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateKillInstanceSessionTaskWithMaintainUser',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateKillInstanceSessionTaskWithMaintainUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建结束会话的任务
     *  *
     * @param CreateKillInstanceSessionTaskWithMaintainUserRequest $request CreateKillInstanceSessionTaskWithMaintainUserRequest
     *
     * @return CreateKillInstanceSessionTaskWithMaintainUserResponse CreateKillInstanceSessionTaskWithMaintainUserResponse
     */
    public function createKillInstanceSessionTaskWithMaintainUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createKillInstanceSessionTaskWithMaintainUserWithOptions($request, $runtime);
    }

    /**
     * @summary Adds a tag to a SQL template.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param CreateQueryOptimizeTagRequest $request CreateQueryOptimizeTagRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateQueryOptimizeTagResponse CreateQueryOptimizeTagResponse
     */
    public function createQueryOptimizeTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->comments)) {
            $query['Comments'] = $request->comments;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sqlIds)) {
            $query['SqlIds'] = $request->sqlIds;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->tags)) {
            $query['Tags'] = $request->tags;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateQueryOptimizeTag',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateQueryOptimizeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Adds a tag to a SQL template.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param CreateQueryOptimizeTagRequest $request CreateQueryOptimizeTagRequest
     *
     * @return CreateQueryOptimizeTagResponse CreateQueryOptimizeTagResponse
     */
    public function createQueryOptimizeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createQueryOptimizeTagWithOptions($request, $runtime);
    }

    /**
     * @summary Initiates an SQL statement diagnostics request.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param CreateRequestDiagnosisRequest $request CreateRequestDiagnosisRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateRequestDiagnosisResponse CreateRequestDiagnosisResponse
     */
    public function createRequestDiagnosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->database)) {
            $query['Database'] = $request->database;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sql)) {
            $query['Sql'] = $request->sql;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateRequestDiagnosis',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateRequestDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Initiates an SQL statement diagnostics request.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call Database Autonomy Service (DAS), you must set the region to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of ApsaraDB RDS for PostgreSQL instances must be 20221230 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param CreateRequestDiagnosisRequest $request CreateRequestDiagnosisRequest
     *
     * @return CreateRequestDiagnosisResponse CreateRequestDiagnosisResponse
     */
    public function createRequestDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createRequestDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @summary Creates an offline task for Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can create an offline task only for database instances for which DAS Enterprise Edition V2 or V3 is enabled. For more information about the databases and regions that are supported by various versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param CreateSqlLogTaskRequest $request CreateSqlLogTaskRequest
     * @param RuntimeOptions          $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateSqlLogTaskResponse CreateSqlLogTaskResponse
     */
    public function createSqlLogTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->type)) {
            $body['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateSqlLogTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateSqlLogTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates an offline task for Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   You can create an offline task only for database instances for which DAS Enterprise Edition V2 or V3 is enabled. For more information about the databases and regions that are supported by various versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param CreateSqlLogTaskRequest $request CreateSqlLogTaskRequest
     *
     * @return CreateSqlLogTaskResponse CreateSqlLogTaskResponse
     */
    public function createSqlLogTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createSqlLogTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Creates a storage analysis task to query the usage details of one or more databases and tables.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param CreateStorageAnalysisTaskRequest $request CreateStorageAnalysisTaskRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateStorageAnalysisTaskResponse CreateStorageAnalysisTaskResponse
     */
    public function createStorageAnalysisTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->tableName)) {
            $query['TableName'] = $request->tableName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'CreateStorageAnalysisTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateStorageAnalysisTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Creates a storage analysis task to query the usage details of one or more databases and tables.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param CreateStorageAnalysisTaskRequest $request CreateStorageAnalysisTaskRequest
     *
     * @return CreateStorageAnalysisTaskResponse CreateStorageAnalysisTaskResponse
     */
    public function createStorageAnalysisTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createStorageAnalysisTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to handle traffic spikes in an effective manner. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DeleteCloudBenchTaskRequest $request DeleteCloudBenchTaskRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteCloudBenchTaskResponse DeleteCloudBenchTaskResponse
     */
    public function deleteCloudBenchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteCloudBenchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteCloudBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to handle traffic spikes in an effective manner. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DeleteCloudBenchTaskRequest $request DeleteCloudBenchTaskRequest
     *
     * @return DeleteCloudBenchTaskResponse DeleteCloudBenchTaskResponse
     */
    public function deleteCloudBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteCloudBenchTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Deletes the metadata of a stopped DBGateway.
     *  *
     * @description *   This operation is used to delete the metadata of a DBGateway that is released in a stress testing task created by calling the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  If the heartbeat is lost between a DBGateway and the access point for more than 20 seconds, the DBGateway is considered stopped.
     *  *
     * @param DeleteStopGatewayRequest $request DeleteStopGatewayRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteStopGatewayResponse DeleteStopGatewayResponse
     */
    public function deleteStopGatewayWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->gatewayId)) {
            $query['GatewayId'] = $request->gatewayId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DeleteStopGateway',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DeleteStopGatewayResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Deletes the metadata of a stopped DBGateway.
     *  *
     * @description *   This operation is used to delete the metadata of a DBGateway that is released in a stress testing task created by calling the [CreateCloudBenchTasks](https://help.aliyun.com/document_detail/230665.html) operation.
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  If the heartbeat is lost between a DBGateway and the access point for more than 20 seconds, the DBGateway is considered stopped.
     *  *
     * @param DeleteStopGatewayRequest $request DeleteStopGatewayRequest
     *
     * @return DeleteStopGatewayResponse DeleteStopGatewayResponse
     */
    public function deleteStopGateway($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteStopGatewayWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of the auto scaling feature for an instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeAutoScalingConfigRequest $request DescribeAutoScalingConfigRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoScalingConfigResponse DescribeAutoScalingConfigResponse
     */
    public function describeAutoScalingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoScalingConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of the auto scaling feature for an instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeAutoScalingConfigRequest $request DescribeAutoScalingConfigRequest
     *
     * @return DescribeAutoScalingConfigResponse DescribeAutoScalingConfigResponse
     */
    public function describeAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the auto scaling history of an instance.
     *  *
     * @description *   You can call this operation to query the history information about the automatic performance scaling only of ApsaraDB RDS for MySQL High-availability Edition instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeAutoScalingHistoryRequest $request DescribeAutoScalingHistoryRequest
     * @param RuntimeOptions                    $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeAutoScalingHistoryResponse DescribeAutoScalingHistoryResponse
     */
    public function describeAutoScalingHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeAutoScalingHistory',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeAutoScalingHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the auto scaling history of an instance.
     *  *
     * @description *   You can call this operation to query the history information about the automatic performance scaling only of ApsaraDB RDS for MySQL High-availability Edition instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeAutoScalingHistoryRequest $request DescribeAutoScalingHistoryRequest
     *
     * @return DescribeAutoScalingHistoryResponse DescribeAutoScalingHistoryResponse
     */
    public function describeAutoScalingHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeAutoScalingHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of a cache analysis task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *  *
     * @param DescribeCacheAnalysisJobRequest $request DescribeCacheAnalysisJobRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCacheAnalysisJobResponse DescribeCacheAnalysisJobResponse
     */
    public function describeCacheAnalysisJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCacheAnalysisJob',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCacheAnalysisJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of a cache analysis task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *  *
     * @param DescribeCacheAnalysisJobRequest $request DescribeCacheAnalysisJobRequest
     *
     * @return DescribeCacheAnalysisJobResponse DescribeCacheAnalysisJobResponse
     */
    public function describeCacheAnalysisJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisJobWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a list of cache analysis tasks.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *  *
     * @param DescribeCacheAnalysisJobsRequest $request DescribeCacheAnalysisJobsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCacheAnalysisJobsResponse DescribeCacheAnalysisJobsResponse
     */
    public function describeCacheAnalysisJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
            'action'      => 'DescribeCacheAnalysisJobs',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCacheAnalysisJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a list of cache analysis tasks.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis.
     *  *
     * @param DescribeCacheAnalysisJobsRequest $request DescribeCacheAnalysisJobsRequest
     *
     * @return DescribeCacheAnalysisJobsResponse DescribeCacheAnalysisJobsResponse
     */
    public function describeCacheAnalysisJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCacheAnalysisJobsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries stress testing tasks.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudBenchTasksRequest $request DescribeCloudBenchTasksRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudBenchTasksResponse DescribeCloudBenchTasksResponse
     */
    public function describeCloudBenchTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->taskType)) {
            $query['TaskType'] = $request->taskType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudBenchTasks',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudBenchTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries stress testing tasks.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudBenchTasksRequest $request DescribeCloudBenchTasksRequest
     *
     * @return DescribeCloudBenchTasksResponse DescribeCloudBenchTasksResponse
     */
    public function describeCloudBenchTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudBenchTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudbenchTaskRequest $request DescribeCloudbenchTaskRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudbenchTaskResponse DescribeCloudbenchTaskResponse
     */
    public function describeCloudbenchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudbenchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudbenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether you need to scale up your database instance to handle workloads during peak hours. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudbenchTaskRequest $request DescribeCloudbenchTaskRequest
     *
     * @return DescribeCloudbenchTaskResponse DescribeCloudbenchTaskResponse
     */
    public function describeCloudbenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudbenchTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudbenchTaskConfigRequest $request DescribeCloudbenchTaskConfigRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeCloudbenchTaskConfigResponse DescribeCloudbenchTaskConfigResponse
     */
    public function describeCloudbenchTaskConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeCloudbenchTaskConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeCloudbenchTaskConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param DescribeCloudbenchTaskConfigRequest $request DescribeCloudbenchTaskConfigRequest
     *
     * @return DescribeCloudbenchTaskConfigResponse DescribeCloudbenchTaskConfigResponse
     */
    public function describeCloudbenchTaskConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeCloudbenchTaskConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries diagnostics reports.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB for Redis
     *  *
     * @param DescribeDiagnosticReportListRequest $request DescribeDiagnosticReportListRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeDiagnosticReportListResponse DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->DBInstanceId)) {
            $query['DBInstanceId'] = $request->DBInstanceId;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
            'action'      => 'DescribeDiagnosticReportList',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeDiagnosticReportListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries diagnostics reports.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable to the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB for Redis
     *  *
     * @param DescribeDiagnosticReportListRequest $request DescribeDiagnosticReportListRequest
     *
     * @return DescribeDiagnosticReportListResponse DescribeDiagnosticReportListResponse
     */
    public function describeDiagnosticReportList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeDiagnosticReportListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hot keys and the large keys in the memory in real time.
     *  *
     * @description This operation sorts list, hash, set, and zset keys based on the number of elements contained in these keys. The top three keys that contain the most elements are considered large keys. If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for ApsaraDB for Redis instances that meet the following requirements:
     *     *   The instance is a Community Edition instance that uses a major version of 5.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeHotBigKeysRequest $request DescribeHotBigKeysRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHotBigKeysResponse DescribeHotBigKeysResponse
     */
    public function describeHotBigKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHotBigKeys',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHotBigKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hot keys and the large keys in the memory in real time.
     *  *
     * @description This operation sorts list, hash, set, and zset keys based on the number of elements contained in these keys. The top three keys that contain the most elements are considered large keys. If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for ApsaraDB for Redis instances that meet the following requirements:
     *     *   The instance is a Community Edition instance that uses a major version of 5.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeHotBigKeysRequest $request DescribeHotBigKeysRequest
     *
     * @return DescribeHotBigKeysResponse DescribeHotBigKeysResponse
     */
    public function describeHotBigKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotBigKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the hot keys of an ApsaraDB for Redis instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances that meet the following requirements:
     *     *   The ApsaraDB for Redis instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For more information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeHotKeysRequest $request DescribeHotKeysRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeHotKeysResponse DescribeHotKeysResponse
     */
    public function describeHotKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeHotKeys',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeHotKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the hot keys of an ApsaraDB for Redis instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances that meet the following requirements:
     *     *   The ApsaraDB for Redis instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For more information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeHotKeysRequest $request DescribeHotKeysRequest
     *
     * @return DescribeHotKeysResponse DescribeHotKeysResponse
     */
    public function describeHotKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeHotKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries whether Database Autonomy Service (DAS) Enterprise Edition is enabled for a database instance.
     *  *
     * @description *   For more information about database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     *  *
     * @param DescribeInstanceDasProRequest $request DescribeInstanceDasProRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeInstanceDasProResponse DescribeInstanceDasProResponse
     */
    public function describeInstanceDasProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeInstanceDasPro',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeInstanceDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries whether Database Autonomy Service (DAS) Enterprise Edition is enabled for a database instance.
     *  *
     * @description *   For more information about database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     *  *
     * @param DescribeInstanceDasProRequest $request DescribeInstanceDasProRequest
     *
     * @return DescribeInstanceDasProResponse DescribeInstanceDasProResponse
     */
    public function describeInstanceDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeInstanceDasProWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the configurations of Database Autonomy Service (DAS) Enterprise Edition that is enabled for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogConfigRequest $request DescribeSqlLogConfigRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlLogConfigResponse DescribeSqlLogConfigResponse
     */
    public function describeSqlLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlLogConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the configurations of Database Autonomy Service (DAS) Enterprise Edition that is enabled for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogConfigRequest $request DescribeSqlLogConfigRequest
     *
     * @return DescribeSqlLogConfigResponse DescribeSqlLogConfigResponse
     */
    public function describeSqlLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the information about the logs of Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogRecordsRequest $request DescribeSqlLogRecordsRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlLogRecordsResponse DescribeSqlLogRecordsResponse
     */
    public function describeSqlLogRecordsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlLogRecords',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlLogRecordsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the information about the logs of Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogRecordsRequest $request DescribeSqlLogRecordsRequest
     *
     * @return DescribeSqlLogRecordsResponse DescribeSqlLogRecordsResponse
     */
    public function describeSqlLogRecords($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogRecordsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the statistics of Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogStatisticRequest $request DescribeSqlLogStatisticRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlLogStatisticResponse DescribeSqlLogStatisticResponse
     */
    public function describeSqlLogStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlLogStatistic',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlLogStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the statistics of Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogStatisticRequest $request DescribeSqlLogStatisticRequest
     *
     * @return DescribeSqlLogStatisticResponse DescribeSqlLogStatisticResponse
     */
    public function describeSqlLogStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of an offline task in Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogTaskRequest $request DescribeSqlLogTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlLogTaskResponse DescribeSqlLogTaskResponse
     */
    public function describeSqlLogTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlLogTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlLogTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of an offline task in Database Autonomy Service (DAS) Enterprise Edition.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogTaskRequest $request DescribeSqlLogTaskRequest
     *
     * @return DescribeSqlLogTaskResponse DescribeSqlLogTaskResponse
     */
    public function describeSqlLogTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL Explorer and Audit tasks of a database instance for which Database Autonomy Service (DAS) Enterprise Edition is enabled.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogTasksRequest $request DescribeSqlLogTasksRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeSqlLogTasksResponse DescribeSqlLogTasksResponse
     */
    public function describeSqlLogTasksWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filters)) {
            $body['Filters'] = $request->filters;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'DescribeSqlLogTasks',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeSqlLogTasksResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the SQL Explorer and Audit tasks of a database instance for which Database Autonomy Service (DAS) Enterprise Edition is enabled.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param DescribeSqlLogTasksRequest $request DescribeSqlLogTasksRequest
     *
     * @return DescribeSqlLogTasksResponse DescribeSqlLogTasksResponse
     */
    public function describeSqlLogTasks($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeSqlLogTasksWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 100 large keys over a period of time.
     *  *
     * @description The list, hash, set, and zset keys are sorted based on the number of elements in these keys. The top three keys that have the most elements are considered large keys.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeTopBigKeysRequest $request DescribeTopBigKeysRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTopBigKeysResponse DescribeTopBigKeysResponse
     */
    public function describeTopBigKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopBigKeys',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTopBigKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 100 large keys over a period of time.
     *  *
     * @description The list, hash, set, and zset keys are sorted based on the number of elements in these keys. The top three keys that have the most elements are considered large keys.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is ApsaraDB for Redis Community Edition instances that use a major version of 5.0 or later or a performance-enhanced instance of the ApsaraDB for Redis Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html) and [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html).
     *  *
     * @param DescribeTopBigKeysRequest $request DescribeTopBigKeysRequest
     *
     * @return DescribeTopBigKeysResponse DescribeTopBigKeysResponse
     */
    public function describeTopBigKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopBigKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the top 100 hot keys over a period of time.
     *  *
     * @description If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html) and [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html).
     *  *
     * @param DescribeTopHotKeysRequest $request DescribeTopHotKeysRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return DescribeTopHotKeysResponse DescribeTopHotKeysResponse
     */
    public function describeTopHotKeysWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DescribeTopHotKeys',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DescribeTopHotKeysResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the top 100 hot keys over a period of time.
     *  *
     * @description If the number of queries per second (QPS) of a key is greater than 3,000, the key is considered a hot key.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than 4.3.3. We recommend that you use the latest version.
     * *   The version of Database Autonomy Service (DAS) SDK must be 1.0.2 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is available only for an ApsaraDB for Redis instance of one of the following versions:
     *     *   The instance is a Community Edition instance that uses a major version of 4.0 or later or a performance-enhanced instance of the Enhanced Edition (Tair).
     *     *   The ApsaraDB for Redis instance is updated to the latest minor version.
     * >  For information about how to query and update the minor version of an instance, see [DescribeEngineVersion](https://help.aliyun.com/document_detail/95268.html) and [ModifyInstanceMinorVersion](https://help.aliyun.com/document_detail/129381.html).
     *  *
     * @param DescribeTopHotKeysRequest $request DescribeTopHotKeysRequest
     *
     * @return DescribeTopHotKeysResponse DescribeTopHotKeysResponse
     */
    public function describeTopHotKeys($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->describeTopHotKeysWithOptions($request, $runtime);
    }

    /**
     * @summary Disables all throttling rules that are in effect.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param DisableAllSqlConcurrencyControlRulesRequest $request DisableAllSqlConcurrencyControlRulesRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAllSqlConcurrencyControlRulesResponse DisableAllSqlConcurrencyControlRulesResponse
     */
    public function disableAllSqlConcurrencyControlRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAllSqlConcurrencyControlRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAllSqlConcurrencyControlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables all throttling rules that are in effect.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param DisableAllSqlConcurrencyControlRulesRequest $request DisableAllSqlConcurrencyControlRulesRequest
     *
     * @return DisableAllSqlConcurrencyControlRulesResponse DisableAllSqlConcurrencyControlRulesResponse
     */
    public function disableAllSqlConcurrencyControlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAllSqlConcurrencyControlRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the automatic tablespace fragment recycling feature for database instances at a time.
     *  *
     * @description If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param DisableAutoResourceOptimizeRulesRequest $request DisableAutoResourceOptimizeRulesRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAutoResourceOptimizeRulesResponse DisableAutoResourceOptimizeRulesResponse
     */
    public function disableAutoResourceOptimizeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAutoResourceOptimizeRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAutoResourceOptimizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the automatic tablespace fragment recycling feature for database instances at a time.
     *  *
     * @description If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param DisableAutoResourceOptimizeRulesRequest $request DisableAutoResourceOptimizeRulesRequest
     *
     * @return DisableAutoResourceOptimizeRulesResponse DisableAutoResourceOptimizeRulesResponse
     */
    public function disableAutoResourceOptimizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoResourceOptimizeRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the automatic SQL throttling feature for multiple database instances at a time.
     *  *
     * @description If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param DisableAutoThrottleRulesRequest $request DisableAutoThrottleRulesRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableAutoThrottleRulesResponse DisableAutoThrottleRulesResponse
     */
    public function disableAutoThrottleRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableAutoThrottleRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableAutoThrottleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the automatic SQL throttling feature for multiple database instances at a time.
     *  *
     * @description If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param DisableAutoThrottleRulesRequest $request DisableAutoThrottleRulesRequest
     *
     * @return DisableAutoThrottleRulesResponse DisableAutoThrottleRulesResponse
     */
    public function disableAutoThrottleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableAutoThrottleRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Disables Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *  *
     * @description *   For more information about database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     *  *
     * @param DisableDasProRequest $request DisableDasProRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableDasProResponse DisableDasProResponse
     */
    public function disableDasProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableDasPro',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *  *
     * @description *   For more information about database instances that support DAS Enterprise Edition, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     *  *
     * @param DisableDasProRequest $request DisableDasProRequest
     *
     * @return DisableDasProResponse DisableDasProResponse
     */
    public function disableDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableDasProWithOptions($request, $runtime);
    }

    /**
     * @summary Disables the auto scaling feature for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances.
     *  *
     * @param DisableInstanceDasConfigRequest $request DisableInstanceDasConfigRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableInstanceDasConfigResponse DisableInstanceDasConfigResponse
     */
    public function disableInstanceDasConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->scaleType)) {
            $query['ScaleType'] = $request->scaleType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableInstanceDasConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableInstanceDasConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables the auto scaling feature for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to ApsaraDB for Redis instances.
     *  *
     * @param DisableInstanceDasConfigRequest $request DisableInstanceDasConfigRequest
     *
     * @return DisableInstanceDasConfigResponse DisableInstanceDasConfigResponse
     */
    public function disableInstanceDasConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableInstanceDasConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Disables a throttling rule.
     *  *
     * @description This operation is applicable to the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param DisableSqlConcurrencyControlRequest $request DisableSqlConcurrencyControlRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return DisableSqlConcurrencyControlResponse DisableSqlConcurrencyControlResponse
     */
    public function disableSqlConcurrencyControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->itemId)) {
            $query['ItemId'] = $request->itemId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'DisableSqlConcurrencyControl',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return DisableSqlConcurrencyControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Disables a throttling rule.
     *  *
     * @description This operation is applicable to the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param DisableSqlConcurrencyControlRequest $request DisableSqlConcurrencyControlRequest
     *
     * @return DisableSqlConcurrencyControlResponse DisableSqlConcurrencyControlResponse
     */
    public function disableSqlConcurrencyControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->disableSqlConcurrencyControlWithOptions($request, $runtime);
    }

    /**
     * @summary Enables Database Autonomy Service (DAS) Enterprise Edition V1 for a database instance.
     *  *
     * @description *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  If your database instance supports DAS Enterprise Edition V3, you cannot call this operation to enable DAS Enterprise Edition V1. You can call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable DAS Enterprise Edition V3 for your database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param EnableDasProRequest $request EnableDasProRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableDasProResponse EnableDasProResponse
     */
    public function enableDasProWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sqlRetention)) {
            $query['SqlRetention'] = $request->sqlRetention;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableDasPro',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableDasProResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables Database Autonomy Service (DAS) Enterprise Edition V1 for a database instance.
     *  *
     * @description *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1.
     * >  If your database instance supports DAS Enterprise Edition V3, you cannot call this operation to enable DAS Enterprise Edition V1. You can call the [ModifySqlLogConfig](https://help.aliyun.com/document_detail/2778835.html) operation to enable DAS Enterprise Edition V3 for your database instance. For more information about the databases and regions supported by each version of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param EnableDasProRequest $request EnableDasProRequest
     *
     * @return EnableDasProResponse EnableDasProResponse
     */
    public function enableDasPro($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableDasProWithOptions($request, $runtime);
    }

    /**
     * @summary Enables SQL throttling to control the numbers of database access requests and concurrent SQL statements.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param EnableSqlConcurrencyControlRequest $request EnableSqlConcurrencyControlRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return EnableSqlConcurrencyControlResponse EnableSqlConcurrencyControlResponse
     */
    public function enableSqlConcurrencyControlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->concurrencyControlTime)) {
            $query['ConcurrencyControlTime'] = $request->concurrencyControlTime;
        }
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $query['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->sqlKeywords)) {
            $query['SqlKeywords'] = $request->sqlKeywords;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'EnableSqlConcurrencyControl',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return EnableSqlConcurrencyControlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables SQL throttling to control the numbers of database access requests and concurrent SQL statements.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param EnableSqlConcurrencyControlRequest $request EnableSqlConcurrencyControlRequest
     *
     * @return EnableSqlConcurrencyControlResponse EnableSqlConcurrencyControlResponse
     */
    public function enableSqlConcurrencyControl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->enableSqlConcurrencyControlWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously queries the IDs of SQL statements that generate a MySQL error code in the SQL Explorer results of a database instance.
     *  *
     * @description >  GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestListByCodeRequest $request GetAsyncErrorRequestListByCodeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncErrorRequestListByCodeResponse GetAsyncErrorRequestListByCodeResponse
     */
    public function getAsyncErrorRequestListByCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->errorCode)) {
            $query['ErrorCode'] = $request->errorCode;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncErrorRequestListByCode',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncErrorRequestListByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously queries the IDs of SQL statements that generate a MySQL error code in the SQL Explorer results of a database instance.
     *  *
     * @description >  GetAsyncErrorRequestListByCode is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestListByCodeRequest $request GetAsyncErrorRequestListByCodeRequest
     *
     * @return GetAsyncErrorRequestListByCodeResponse GetAsyncErrorRequestListByCodeResponse
     */
    public function getAsyncErrorRequestListByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestListByCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously queries the MySQL error codes in SQL Explorer data and the number of SQL queries corresponding to each error code.
     *  *
     * @description >  GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestStatByCodeRequest $request GetAsyncErrorRequestStatByCodeRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncErrorRequestStatByCodeResponse GetAsyncErrorRequestStatByCodeResponse
     */
    public function getAsyncErrorRequestStatByCodeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncErrorRequestStatByCode',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncErrorRequestStatByCodeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously queries the MySQL error codes in SQL Explorer data and the number of SQL queries corresponding to each error code.
     *  *
     * @description >  GetAsyncErrorRequestStatByCode is an asynchronous operation After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestStatByCodeRequest $request GetAsyncErrorRequestStatByCodeRequest
     *
     * @return GetAsyncErrorRequestStatByCodeResponse GetAsyncErrorRequestStatByCodeResponse
     */
    public function getAsyncErrorRequestStatByCode($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestStatByCodeWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously obtains the number of failed executions of SQL templates based on SQL Explorer data.
     *  *
     * @description >  GetAsyncErrorRequestStatResult is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestStatResultRequest $request GetAsyncErrorRequestStatResultRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAsyncErrorRequestStatResultResponse GetAsyncErrorRequestStatResultResponse
     */
    public function getAsyncErrorRequestStatResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sqlIdList)) {
            $query['SqlIdList'] = $request->sqlIdList;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAsyncErrorRequestStatResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAsyncErrorRequestStatResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously obtains the number of failed executions of SQL templates based on SQL Explorer data.
     *  *
     * @description >  GetAsyncErrorRequestStatResult is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetAsyncErrorRequestStatResultRequest $request GetAsyncErrorRequestStatResultRequest
     *
     * @return GetAsyncErrorRequestStatResultResponse GetAsyncErrorRequestStatResultResponse
     */
    public function getAsyncErrorRequestStatResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAsyncErrorRequestStatResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the usage of auto-increment table IDs.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *  *
     * @param GetAutoIncrementUsageStatisticRequest $request GetAutoIncrementUsageStatisticRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoIncrementUsageStatisticResponse GetAutoIncrementUsageStatisticResponse
     */
    public function getAutoIncrementUsageStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbNames)) {
            $query['DbNames'] = $request->dbNames;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->ratioFilter)) {
            $query['RatioFilter'] = $request->ratioFilter;
        }
        if (!Utils::isUnset($request->realTime)) {
            $query['RealTime'] = $request->realTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoIncrementUsageStatistic',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoIncrementUsageStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the usage of auto-increment table IDs.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call DAS, you must set the region to cn-shanghai.
     *  *
     * @param GetAutoIncrementUsageStatisticRequest $request GetAutoIncrementUsageStatisticRequest
     *
     * @return GetAutoIncrementUsageStatisticResponse GetAutoIncrementUsageStatisticResponse
     */
    public function getAutoIncrementUsageStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoIncrementUsageStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the automatic fragment recycling rules of database instances.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * *   The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
     *  *
     * @param GetAutoResourceOptimizeRulesRequest $request GetAutoResourceOptimizeRulesRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoResourceOptimizeRulesResponse GetAutoResourceOptimizeRulesResponse
     */
    public function getAutoResourceOptimizeRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoResourceOptimizeRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoResourceOptimizeRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the automatic fragment recycling rules of database instances.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance is an ApsaraDB RDS for MySQL instance of High-availability Edition.
     * *   The database instance has four or more cores, and **innodb_file_per_table** is set to **ON**.
     *  *
     * @param GetAutoResourceOptimizeRulesRequest $request GetAutoResourceOptimizeRulesRequest
     *
     * @return GetAutoResourceOptimizeRulesResponse GetAutoResourceOptimizeRulesResponse
     */
    public function getAutoResourceOptimizeRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoResourceOptimizeRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the automatic SQL throttling rules of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0.
     *     *   PolarDB for MySQL Cluster Edition instance that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0, or PolarDB for MySQL X-Engine Edition instance that runs MySQL 8.0.
     *  *
     * @param GetAutoThrottleRulesRequest $request GetAutoThrottleRulesRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutoThrottleRulesResponse GetAutoThrottleRulesResponse
     */
    public function getAutoThrottleRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutoThrottleRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutoThrottleRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the automatic SQL throttling rules of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition instance that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0.
     *     *   PolarDB for MySQL Cluster Edition instance that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0, or PolarDB for MySQL X-Engine Edition instance that runs MySQL 8.0.
     *  *
     * @param GetAutoThrottleRulesRequest $request GetAutoThrottleRulesRequest
     *
     * @return GetAutoThrottleRulesResponse GetAutoThrottleRulesResponse
     */
    public function getAutoThrottleRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutoThrottleRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of notification events of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *  *
     * @param GetAutonomousNotifyEventContentRequest $request GetAutonomousNotifyEventContentRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutonomousNotifyEventContentResponse GetAutonomousNotifyEventContentResponse
     */
    public function getAutonomousNotifyEventContentWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->spanId)) {
            $query['SpanId'] = $request->spanId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutonomousNotifyEventContent',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutonomousNotifyEventContentResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of notification events of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *  *
     * @param GetAutonomousNotifyEventContentRequest $request GetAutonomousNotifyEventContentRequest
     *
     * @return GetAutonomousNotifyEventContentResponse GetAutonomousNotifyEventContentResponse
     */
    public function getAutonomousNotifyEventContent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutonomousNotifyEventContentWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the notification events of one or more urgency levels within a period.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *  *
     * @param GetAutonomousNotifyEventsInRangeRequest $request GetAutonomousNotifyEventsInRangeRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAutonomousNotifyEventsInRangeResponse GetAutonomousNotifyEventsInRangeResponse
     */
    public function getAutonomousNotifyEventsInRangeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->eventContext)) {
            $query['EventContext'] = $request->eventContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->minLevel)) {
            $query['MinLevel'] = $request->minLevel;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageOffset)) {
            $query['PageOffset'] = $request->pageOffset;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetAutonomousNotifyEventsInRange',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetAutonomousNotifyEventsInRangeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the notification events of one or more urgency levels within a period.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   After your instance is connected to DAS, notification events such as snapshot capture are triggered if DAS detects changes to database monitoring metrics during anomaly detection.
     * >  You can query the details of notification events only if the autonomy center is enabled. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     *  *
     * @param GetAutonomousNotifyEventsInRangeRequest $request GetAutonomousNotifyEventsInRangeRequest
     *
     * @return GetAutonomousNotifyEventsInRangeResponse GetAutonomousNotifyEventsInRangeResponse
     */
    public function getAutonomousNotifyEventsInRange($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAutonomousNotifyEventsInRangeWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the blocking statistics of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetBlockingDetailListRequest $request GetBlockingDetailListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetBlockingDetailListResponse GetBlockingDetailListResponse
     */
    public function getBlockingDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbNameList)) {
            $query['DbNameList'] = $request->dbNameList;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->queryHash)) {
            $query['QueryHash'] = $request->queryHash;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetBlockingDetailList',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetBlockingDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the blocking statistics of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetBlockingDetailListRequest $request GetBlockingDetailListRequest
     *
     * @return GetBlockingDetailListResponse GetBlockingDetailListResponse
     */
    public function getBlockingDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getBlockingDetailListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the diagnosis of network connectivity when a user accesses a specific database instance by specifying an IP address.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *  *
     * @param GetDBInstanceConnectivityDiagnosisRequest $request GetDBInstanceConnectivityDiagnosisRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDBInstanceConnectivityDiagnosisResponse GetDBInstanceConnectivityDiagnosisResponse
     */
    public function getDBInstanceConnectivityDiagnosisWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->srcIp)) {
            $query['SrcIp'] = $request->srcIp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDBInstanceConnectivityDiagnosis',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDBInstanceConnectivityDiagnosisResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the diagnosis of network connectivity when a user accesses a specific database instance by specifying an IP address.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *  *
     * @param GetDBInstanceConnectivityDiagnosisRequest $request GetDBInstanceConnectivityDiagnosisRequest
     *
     * @return GetDBInstanceConnectivityDiagnosisResponse GetDBInstanceConnectivityDiagnosisResponse
     */
    public function getDBInstanceConnectivityDiagnosis($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDBInstanceConnectivityDiagnosisWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the storage usage of SQL Explorer of a database instance.
     *  *
     * @description *   For information about database instances that support this operation, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     *  *
     * @param GetDasProServiceUsageRequest $request GetDasProServiceUsageRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDasProServiceUsageResponse GetDasProServiceUsageResponse
     */
    public function getDasProServiceUsageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetDasProServiceUsage',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDasProServiceUsageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the storage usage of SQL Explorer of a database instance.
     *  *
     * @description *   For information about database instances that support this operation, see [Overview of DAS Enterprise Edition](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation is applicable only to DAS Enterprise Edition V1 and V2.
     *  *
     * @param GetDasProServiceUsageRequest $request GetDasProServiceUsageRequest
     *
     * @return GetDasProServiceUsageResponse GetDasProServiceUsageResponse
     */
    public function getDasProServiceUsage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasProServiceUsageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of the hot storage data that Database Autonomy Service (DAS) Enterprise Edition V2 or V3 generated for a database instance within the previous seven days.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster in the China (Shanghai) region.
     * >  You can query only the data generated after DAS Enterprise Edition V2 or V3 was enabled. The beginning of the time range to query can be up to seven days earlier than the current time. The interval between the beginning and the end of the time range to query cannot exceed 24 hours.
     *  *
     * @param GetDasSQLLogHotDataRequest $request GetDasSQLLogHotDataRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDasSQLLogHotDataResponse GetDasSQLLogHotDataResponse
     */
    public function getDasSQLLogHotDataWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accountName)) {
            $body['AccountName'] = $request->accountName;
        }
        if (!Utils::isUnset($request->childDBInstanceIDs)) {
            $body['ChildDBInstanceIDs'] = $request->childDBInstanceIDs;
        }
        if (!Utils::isUnset($request->DBName)) {
            $body['DBName'] = $request->DBName;
        }
        if (!Utils::isUnset($request->end)) {
            $body['End'] = $request->end;
        }
        if (!Utils::isUnset($request->fail)) {
            $body['Fail'] = $request->fail;
        }
        if (!Utils::isUnset($request->hostAddress)) {
            $body['HostAddress'] = $request->hostAddress;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->logicalOperator)) {
            $body['LogicalOperator'] = $request->logicalOperator;
        }
        if (!Utils::isUnset($request->maxLatancy)) {
            $body['MaxLatancy'] = $request->maxLatancy;
        }
        if (!Utils::isUnset($request->maxRecordsPerPage)) {
            $body['MaxRecordsPerPage'] = $request->maxRecordsPerPage;
        }
        if (!Utils::isUnset($request->maxRows)) {
            $body['MaxRows'] = $request->maxRows;
        }
        if (!Utils::isUnset($request->maxScanRows)) {
            $body['MaxScanRows'] = $request->maxScanRows;
        }
        if (!Utils::isUnset($request->maxSpillCnt)) {
            $body['MaxSpillCnt'] = $request->maxSpillCnt;
        }
        if (!Utils::isUnset($request->minLatancy)) {
            $body['MinLatancy'] = $request->minLatancy;
        }
        if (!Utils::isUnset($request->minRows)) {
            $body['MinRows'] = $request->minRows;
        }
        if (!Utils::isUnset($request->minScanRows)) {
            $body['MinScanRows'] = $request->minScanRows;
        }
        if (!Utils::isUnset($request->minSpillCnt)) {
            $body['MinSpillCnt'] = $request->minSpillCnt;
        }
        if (!Utils::isUnset($request->pageNumbers)) {
            $body['PageNumbers'] = $request->pageNumbers;
        }
        if (!Utils::isUnset($request->queryKeyword)) {
            $body['QueryKeyword'] = $request->queryKeyword;
        }
        if (!Utils::isUnset($request->role)) {
            $body['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->sortKey)) {
            $body['SortKey'] = $request->sortKey;
        }
        if (!Utils::isUnset($request->sortMethod)) {
            $body['SortMethod'] = $request->sortMethod;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $body['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->state)) {
            $body['State'] = $request->state;
        }
        if (!Utils::isUnset($request->threadID)) {
            $body['ThreadID'] = $request->threadID;
        }
        if (!Utils::isUnset($request->traceId)) {
            $body['TraceId'] = $request->traceId;
        }
        if (!Utils::isUnset($request->transactionId)) {
            $body['TransactionId'] = $request->transactionId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetDasSQLLogHotData',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDasSQLLogHotDataResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of the hot storage data that Database Autonomy Service (DAS) Enterprise Edition V2 or V3 generated for a database instance within the previous seven days.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage must be an ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster in the China (Shanghai) region.
     * >  You can query only the data generated after DAS Enterprise Edition V2 or V3 was enabled. The beginning of the time range to query can be up to seven days earlier than the current time. The interval between the beginning and the end of the time range to query cannot exceed 24 hours.
     *  *
     * @param GetDasSQLLogHotDataRequest $request GetDasSQLLogHotDataRequest
     *
     * @return GetDasSQLLogHotDataResponse GetDasSQLLogHotDataResponse
     */
    public function getDasSQLLogHotData($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDasSQLLogHotDataWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the deadlock details of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetDeadLockDetailListRequest $request GetDeadLockDetailListRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDeadLockDetailListResponse GetDeadLockDetailListResponse
     */
    public function getDeadLockDetailListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbNameList)) {
            $query['DbNameList'] = $request->dbNameList;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
            'action'      => 'GetDeadLockDetailList',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetDeadLockDetailListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the deadlock details of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetDeadLockDetailListRequest $request GetDeadLockDetailListRequest
     *
     * @return GetDeadLockDetailListResponse GetDeadLockDetailListResponse
     */
    public function getDeadLockDetailList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDeadLockDetailListWithOptions($request, $runtime);
    }

    /**
     * @param GetEndpointSwitchTaskRequest $request GetEndpointSwitchTaskRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEndpointSwitchTaskResponse GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        if (!Utils::isUnset($request->accessKey)) {
            $query['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->skipAuth)) {
            $query['skipAuth'] = $request->skipAuth;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEndpointSwitchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEndpointSwitchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetEndpointSwitchTaskRequest $request GetEndpointSwitchTaskRequest
     *
     * @return GetEndpointSwitchTaskResponse GetEndpointSwitchTaskResponse
     */
    public function getEndpointSwitchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEndpointSwitchTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously queries information about failed SQL queries in SQL Explorer data. You can query up to 20 failed SQL queries within the specific time range.
     *  *
     * @description >  GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetErrorRequestSampleRequest $request GetErrorRequestSampleRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return GetErrorRequestSampleResponse GetErrorRequestSampleResponse
     */
    public function getErrorRequestSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $query['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetErrorRequestSample',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetErrorRequestSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously queries information about failed SQL queries in SQL Explorer data. You can query up to 20 failed SQL queries within the specific time range.
     *  *
     * @description >  GetErrorRequestSample is an asynchronous operation. After a request is sent, the complete results are not returned immediately. If the value of **isFinish** is **false** in the response, wait for 1 second and then send a request again. If the value of **isFinish** is **true**, the complete results are returned.
     * *   This API operation supports only ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters for which Database Autonomy Service (DAS) Enterprise Edition is enabled. For more information, see [Purchase DAS Enterprise Edition](https://help.aliyun.com/document_detail/163298.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetErrorRequestSampleRequest $request GetErrorRequestSampleRequest
     *
     * @return GetErrorRequestSampleResponse GetErrorRequestSampleResponse
     */
    public function getErrorRequestSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getErrorRequestSampleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the event subscription settings of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *  *
     * @param GetEventSubscriptionRequest $request GetEventSubscriptionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetEventSubscriptionResponse GetEventSubscriptionResponse
     */
    public function getEventSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetEventSubscription',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetEventSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the event subscription settings of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database instance that you want to manage is connected to DAS.
     *  *
     * @param GetEventSubscriptionRequest $request GetEventSubscriptionRequest
     *
     * @return GetEventSubscriptionResponse GetEventSubscriptionResponse
     */
    public function getEventSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getEventSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Collects the full request statistics in the SQL Explorer results of a database instance by access source.
     *  *
     * @description The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestOriginStatByInstanceIdRequest $request GetFullRequestOriginStatByInstanceIdRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFullRequestOriginStatByInstanceIdResponse GetFullRequestOriginStatByInstanceIdResponse
     */
    public function getFullRequestOriginStatByInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFullRequestOriginStatByInstanceId',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFullRequestOriginStatByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Collects the full request statistics in the SQL Explorer results of a database instance by access source.
     *  *
     * @description The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support this feature, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestOriginStatByInstanceIdRequest $request GetFullRequestOriginStatByInstanceIdRequest
     *
     * @return GetFullRequestOriginStatByInstanceIdResponse GetFullRequestOriginStatByInstanceIdResponse
     */
    public function getFullRequestOriginStatByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestOriginStatByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @summary Queries sample SQL statements in the SQL Explorer data of a database instance by SQL ID. You can query up to 20 sample SQL statements.
     *  *
     * @description The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestSampleByInstanceIdRequest $request GetFullRequestSampleByInstanceIdRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFullRequestSampleByInstanceIdResponse GetFullRequestSampleByInstanceIdResponse
     */
    public function getFullRequestSampleByInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $body = [];
        if (!Utils::isUnset($request->end)) {
            $body['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->start)) {
            $body['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->userId)) {
            $body['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetFullRequestSampleByInstanceId',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFullRequestSampleByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries sample SQL statements in the SQL Explorer data of a database instance by SQL ID. You can query up to 20 sample SQL statements.
     *  *
     * @description The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about the database engines that support SQL Explorer, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestSampleByInstanceIdRequest $request GetFullRequestSampleByInstanceIdRequest
     *
     * @return GetFullRequestSampleByInstanceIdResponse GetFullRequestSampleByInstanceIdResponse
     */
    public function getFullRequestSampleByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestSampleByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously collects the full request statistics in the SQL Explorer results of a database instance by SQL ID.
     *  *
     * @description >  The complete query results are not returned immediately after an asynchronous request is sent. If the value of isFinish is **false** in the response, wait for 1 second and send the request again. The complete query results are returned until the value of isFinish is **true**.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support SQL Explorer, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestStatResultByInstanceIdRequest $request GetFullRequestStatResultByInstanceIdRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetFullRequestStatResultByInstanceIdResponse GetFullRequestStatResultByInstanceIdResponse
     */
    public function getFullRequestStatResultByInstanceIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->asc)) {
            $query['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->dbName)) {
            $query['DbName'] = $request->dbName;
        }
        if (!Utils::isUnset($request->end)) {
            $query['End'] = $request->end;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keyword)) {
            $query['Keyword'] = $request->keyword;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $query['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->originHost)) {
            $query['OriginHost'] = $request->originHost;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $query['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->sqlType)) {
            $query['SqlType'] = $request->sqlType;
        }
        if (!Utils::isUnset($request->start)) {
            $query['Start'] = $request->start;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetFullRequestStatResultByInstanceId',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetFullRequestStatResultByInstanceIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously collects the full request statistics in the SQL Explorer results of a database instance by SQL ID.
     *  *
     * @description >  The complete query results are not returned immediately after an asynchronous request is sent. If the value of isFinish is **false** in the response, wait for 1 second and send the request again. The complete query results are returned until the value of isFinish is **true**.
     * The SQL Explorer feature allows you to check the health status of SQL statements and troubleshoot performance issues. For more information, see [SQL Explorer](https://help.aliyun.com/document_detail/204096.html).
     * *   For more information about database instances that support SQL Explorer, see [Overview](https://help.aliyun.com/document_detail/190912.html).
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     *  *
     * @param GetFullRequestStatResultByInstanceIdRequest $request GetFullRequestStatResultByInstanceIdRequest
     *
     * @return GetFullRequestStatResultByInstanceIdResponse GetFullRequestStatResultByInstanceIdResponse
     */
    public function getFullRequestStatResultByInstanceId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getFullRequestStatResultByInstanceIdWithOptions($request, $runtime);
    }

    /**
     * @param GetHDMAliyunResourceSyncResultRequest $request GetHDMAliyunResourceSyncResultRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHDMAliyunResourceSyncResultResponse GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        if (!Utils::isUnset($request->accessKey)) {
            $query['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->skipAuth)) {
            $query['skipAuth'] = $request->skipAuth;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHDMAliyunResourceSyncResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHDMAliyunResourceSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHDMAliyunResourceSyncResultRequest $request GetHDMAliyunResourceSyncResultRequest
     *
     * @return GetHDMAliyunResourceSyncResultResponse GetHDMAliyunResourceSyncResultResponse
     */
    public function getHDMAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @param GetHDMLastAliyunResourceSyncResultRequest $request GetHDMLastAliyunResourceSyncResultRequest
     * @param RuntimeOptions                            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        if (!Utils::isUnset($request->accessKey)) {
            $query['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->skipAuth)) {
            $query['skipAuth'] = $request->skipAuth;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetHDMLastAliyunResourceSyncResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetHDMLastAliyunResourceSyncResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetHDMLastAliyunResourceSyncResultRequest $request GetHDMLastAliyunResourceSyncResultRequest
     *
     * @return GetHDMLastAliyunResourceSyncResultResponse GetHDMLastAliyunResourceSyncResultResponse
     */
    public function getHDMLastAliyunResourceSyncResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getHDMLastAliyunResourceSyncResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the result of an inspection that is performed on a database instance by using the inspection and scoring feature.
     *  *
     * @description Database Autonomy Service (DAS) provides the inspection and scoring feature. This feature allows you to inspect and score the health status of your instance on a regular basis. This helps you obtain information about the status of your databases. For more information, see [Inspection and scoring](https://help.aliyun.com/document_detail/205659.html).
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of DAS SDK must be V1.0.3 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetInstanceInspectionsRequest $request GetInstanceInspectionsRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceInspectionsResponse GetInstanceInspectionsResponse
     */
    public function getInstanceInspectionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceArea)) {
            $query['InstanceArea'] = $request->instanceArea;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->resourceGroupId)) {
            $query['ResourceGroupId'] = $request->resourceGroupId;
        }
        if (!Utils::isUnset($request->searchMap)) {
            $query['SearchMap'] = $request->searchMap;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceInspections',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceInspectionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the result of an inspection that is performed on a database instance by using the inspection and scoring feature.
     *  *
     * @description Database Autonomy Service (DAS) provides the inspection and scoring feature. This feature allows you to inspect and score the health status of your instance on a regular basis. This helps you obtain information about the status of your databases. For more information, see [Inspection and scoring](https://help.aliyun.com/document_detail/205659.html).
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable only to ApsaraDB RDS for MySQL databases, self-managed MySQL databases hosted on Elastic Compute Service (ECS) instances, self-managed MySQL databases in data centers, ApsaraDB for Redis databases, and PolarDB for MySQL databases.
     * *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of DAS SDK must be V1.0.3 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetInstanceInspectionsRequest $request GetInstanceInspectionsRequest
     *
     * @return GetInstanceInspectionsResponse GetInstanceInspectionsResponse
     */
    public function getInstanceInspections($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceInspectionsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the details of all missing indexes of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetInstanceMissingIndexListRequest $request GetInstanceMissingIndexListRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceMissingIndexListResponse GetInstanceMissingIndexListResponse
     */
    public function getInstanceMissingIndexListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->avgTotalUserCost)) {
            $query['AvgTotalUserCost'] = $request->avgTotalUserCost;
        }
        if (!Utils::isUnset($request->avgUserImpact)) {
            $query['AvgUserImpact'] = $request->avgUserImpact;
        }
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->indexCount)) {
            $query['IndexCount'] = $request->indexCount;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->objectName)) {
            $query['ObjectName'] = $request->objectName;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->reservedPages)) {
            $query['ReservedPages'] = $request->reservedPages;
        }
        if (!Utils::isUnset($request->reservedSize)) {
            $query['ReservedSize'] = $request->reservedSize;
        }
        if (!Utils::isUnset($request->rowCount)) {
            $query['RowCount'] = $request->rowCount;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->uniqueCompiles)) {
            $query['UniqueCompiles'] = $request->uniqueCompiles;
        }
        if (!Utils::isUnset($request->userScans)) {
            $query['UserScans'] = $request->userScans;
        }
        if (!Utils::isUnset($request->userSeeks)) {
            $query['UserSeeks'] = $request->userSeeks;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceMissingIndexList',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceMissingIndexListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the details of all missing indexes of an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for SQL Server instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetInstanceMissingIndexListRequest $request GetInstanceMissingIndexListRequest
     *
     * @return GetInstanceMissingIndexListResponse GetInstanceMissingIndexListResponse
     */
    public function getInstanceMissingIndexList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceMissingIndexListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries statistics on automatic SQL optimization events within a period of time, such as the total number of optimization events and the maximum improvement.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
     *  *
     * @param GetInstanceSqlOptimizeStatisticRequest $request GetInstanceSqlOptimizeStatisticRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetInstanceSqlOptimizeStatisticResponse GetInstanceSqlOptimizeStatisticResponse
     */
    public function getInstanceSqlOptimizeStatisticWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->filterEnable)) {
            $query['FilterEnable'] = $request->filterEnable;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $query['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->threshold)) {
            $query['Threshold'] = $request->threshold;
        }
        if (!Utils::isUnset($request->useMerging)) {
            $query['UseMerging'] = $request->useMerging;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetInstanceSqlOptimizeStatistic',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetInstanceSqlOptimizeStatisticResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries statistics on automatic SQL optimization events within a period of time, such as the total number of optimization events and the maximum improvement.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   The database engine is ApsaraDB RDS for MySQL or PolarDB for MySQL.
     *  *
     * @param GetInstanceSqlOptimizeStatisticRequest $request GetInstanceSqlOptimizeStatisticRequest
     *
     * @return GetInstanceSqlOptimizeStatisticResponse GetInstanceSqlOptimizeStatisticResponse
     */
    public function getInstanceSqlOptimizeStatistic($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getInstanceSqlOptimizeStatisticWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of a task that terminates sessions.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetKillInstanceSessionTaskResultRequest $request GetKillInstanceSessionTaskResultRequest
     * @param RuntimeOptions                          $runtime runtime options for this request RuntimeOptions
     *
     * @return GetKillInstanceSessionTaskResultResponse GetKillInstanceSessionTaskResultResponse
     */
    public function getKillInstanceSessionTaskResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetKillInstanceSessionTaskResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetKillInstanceSessionTaskResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of a task that terminates sessions.
     *  *
     * @description *   This operation is applicable only to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetKillInstanceSessionTaskResultRequest $request GetKillInstanceSessionTaskResultRequest
     *
     * @return GetKillInstanceSessionTaskResultResponse GetKillInstanceSessionTaskResultResponse
     */
    public function getKillInstanceSessionTaskResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getKillInstanceSessionTaskResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the current sessions of an ApsaraDB for MongoDB (MongoDB) instance.
     *  *
     * @description *   This operation is applicable only to MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
     *  *
     * @param GetMongoDBCurrentOpRequest $request GetMongoDBCurrentOpRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMongoDBCurrentOpResponse GetMongoDBCurrentOpResponse
     */
    public function getMongoDBCurrentOpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filterDoc)) {
            $query['FilterDoc'] = $request->filterDoc;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->role)) {
            $query['Role'] = $request->role;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMongoDBCurrentOp',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMongoDBCurrentOpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the current sessions of an ApsaraDB for MongoDB (MongoDB) instance.
     *  *
     * @description *   This operation is applicable only to MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region to cn-shanghai.
     *  *
     * @param GetMongoDBCurrentOpRequest $request GetMongoDBCurrentOpRequest
     *
     * @return GetMongoDBCurrentOpResponse GetMongoDBCurrentOpResponse
     */
    public function getMongoDBCurrentOp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMongoDBCurrentOpWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously queries the sessions of an instance and collects statistics on the sessions based on dimensions.
     *  *
     * @description >  GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetMySQLAllSessionAsyncRequest $request GetMySQLAllSessionAsyncRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetMySQLAllSessionAsyncResponse GetMySQLAllSessionAsyncResponse
     */
    public function getMySQLAllSessionAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->resultId)) {
            $query['ResultId'] = $request->resultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetMySQLAllSessionAsync',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetMySQLAllSessionAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously queries the sessions of an instance and collects statistics on the sessions based on dimensions.
     *  *
     * @description >  GetMySQLAllSessionAsync is an asynchronous operation. After a request is sent, the system does not return complete results but returns a request ID. You need to use the request ID to initiate requests until the value of the **isFinish** field in the returned results is **true**, the complete results are returned. This indicates that to obtain complete data, you must call this operation at least twice.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and PolarDB-X 2.0 instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetMySQLAllSessionAsyncRequest $request GetMySQLAllSessionAsyncRequest
     *
     * @return GetMySQLAllSessionAsyncResponse GetMySQLAllSessionAsyncResponse
     */
    public function getMySQLAllSessionAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getMySQLAllSessionAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary Queries access frequency statistics and hot data on partitions of a PolarDB-X 2.0 instance.
     *  *
     * @description We recommend that you do not call this operation. The data is returned in a special format and is complex to parse. You can use the [heatmap](https://help.aliyun.com/document_detail/470302.html) feature of Database Autonomy Service (DAS) to query the data.
     *  *
     * @param GetPartitionsHeatmapRequest $request GetPartitionsHeatmapRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPartitionsHeatmapResponse GetPartitionsHeatmapResponse
     */
    public function getPartitionsHeatmapWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->timeRange)) {
            $query['TimeRange'] = $request->timeRange;
        }
        if (!Utils::isUnset($request->type)) {
            $query['Type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetPartitionsHeatmap',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPartitionsHeatmapResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries access frequency statistics and hot data on partitions of a PolarDB-X 2.0 instance.
     *  *
     * @description We recommend that you do not call this operation. The data is returned in a special format and is complex to parse. You can use the [heatmap](https://help.aliyun.com/document_detail/470302.html) feature of Database Autonomy Service (DAS) to query the data.
     *  *
     * @param GetPartitionsHeatmapRequest $request GetPartitionsHeatmapRequest
     *
     * @return GetPartitionsHeatmapResponse GetPartitionsHeatmapResponse
     */
    public function getPartitionsHeatmap($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPartitionsHeatmapWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the trend of a metric for the new version of the performance insight feature of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsMetricTrendsRequest $request GetPfsMetricTrendsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPfsMetricTrendsResponse GetPfsMetricTrendsResponse
     */
    public function getPfsMetricTrendsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->metric)) {
            $body['Metric'] = $request->metric;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPfsMetricTrends',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPfsMetricTrendsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the trend of a metric for the new version of the performance insight feature of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsMetricTrendsRequest $request GetPfsMetricTrendsRequest
     *
     * @return GetPfsMetricTrendsResponse GetPfsMetricTrendsResponse
     */
    public function getPfsMetricTrends($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsMetricTrendsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the SQL sample data for the new version of the performance insight feature of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsSqlSampleRequest $request GetPfsSqlSampleRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPfsSqlSampleResponse GetPfsSqlSampleResponse
     */
    public function getPfsSqlSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPfsSqlSample',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPfsSqlSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the SQL sample data for the new version of the performance insight feature of a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsSqlSampleRequest $request GetPfsSqlSampleRequest
     *
     * @return GetPfsSqlSampleResponse GetPfsSqlSampleResponse
     */
    public function getPfsSqlSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsSqlSampleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the full request data generated by the new version of the performance insight feature of a database instance based on the SQL ID.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsSqlSummariesRequest $request GetPfsSqlSummariesRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetPfsSqlSummariesResponse GetPfsSqlSummariesResponse
     */
    public function getPfsSqlSummariesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->asc)) {
            $body['Asc'] = $request->asc;
        }
        if (!Utils::isUnset($request->endTime)) {
            $body['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->keywords)) {
            $body['Keywords'] = $request->keywords;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $body['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->orderBy)) {
            $body['OrderBy'] = $request->orderBy;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $body['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $body['SqlId'] = $request->sqlId;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetPfsSqlSummaries',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetPfsSqlSummariesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the full request data generated by the new version of the performance insight feature of a database instance based on the SQL ID.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this API operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   An ApsaraDB RDS for MySQL instance or a PolarDB for MySQL cluster is connected to DAS.
     * *   The new version of the performance insight feature is enabled for the database instance. For more information, see [Performance insight (new version)](https://help.aliyun.com/document_detail/469117.html).
     *  *
     * @param GetPfsSqlSummariesRequest $request GetPfsSqlSummariesRequest
     *
     * @return GetPfsSqlSummariesResponse GetPfsSqlSummariesResponse
     */
    public function getPfsSqlSummaries($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getPfsSqlSummariesWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about SQL templates based on query governance data.
     *  *
     * @description *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataStatsRequest $request GetQueryOptimizeDataStatsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeDataStatsResponse GetQueryOptimizeDataStatsResponse
     */
    public function getQueryOptimizeDataStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeDataStats',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeDataStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about SQL templates based on query governance data.
     *  *
     * @description *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataStatsRequest $request GetQueryOptimizeDataStatsRequest
     *
     * @return GetQueryOptimizeDataStatsResponse GetQueryOptimizeDataStatsResponse
     */
    public function getQueryOptimizeDataStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataStatsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries information about the best-performing and worst-performing instances based on query governance data.
     *  *
     * @description *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataTopRequest $request GetQueryOptimizeDataTopRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeDataTopResponse GetQueryOptimizeDataTopResponse
     */
    public function getQueryOptimizeDataTopWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeDataTop',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeDataTopResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries information about the best-performing and worst-performing instances based on query governance data.
     *  *
     * @description *   If you use an Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataTopRequest $request GetQueryOptimizeDataTopRequest
     *
     * @return GetQueryOptimizeDataTopResponse GetQueryOptimizeDataTopResponse
     */
    public function getQueryOptimizeDataTop($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataTopWithOptions($request, $runtime);
    }

    /**
     * @summary Queries query governance trend data.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataTrendRequest $request GetQueryOptimizeDataTrendRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeDataTrendResponse GetQueryOptimizeDataTrendResponse
     */
    public function getQueryOptimizeDataTrendWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeDataTrend',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeDataTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries query governance trend data.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeDataTrendRequest $request GetQueryOptimizeDataTrendRequest
     *
     * @return GetQueryOptimizeDataTrendResponse GetQueryOptimizeDataTrendResponse
     */
    public function getQueryOptimizeDataTrend($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeDataTrendWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the failed SQL statements under a SQL template.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeExecErrorSampleRequest $request GetQueryOptimizeExecErrorSampleRequest
     * @param RuntimeOptions                         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeExecErrorSampleResponse GetQueryOptimizeExecErrorSampleResponse
     */
    public function getQueryOptimizeExecErrorSampleWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeExecErrorSample',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeExecErrorSampleResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the failed SQL statements under a SQL template.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeExecErrorSampleRequest $request GetQueryOptimizeExecErrorSampleRequest
     *
     * @return GetQueryOptimizeExecErrorSampleResponse GetQueryOptimizeExecErrorSampleResponse
     */
    public function getQueryOptimizeExecErrorSample($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeExecErrorSampleWithOptions($request, $runtime);
    }

    /**
     * @summary Queries SQL templates that failed to be executed.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeExecErrorStatsRequest $request GetQueryOptimizeExecErrorStatsRequest
     * @param RuntimeOptions                        $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeExecErrorStatsResponse GetQueryOptimizeExecErrorStatsResponse
     */
    public function getQueryOptimizeExecErrorStatsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeExecErrorStats',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeExecErrorStatsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries SQL templates that failed to be executed.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeExecErrorStatsRequest $request GetQueryOptimizeExecErrorStatsRequest
     *
     * @return GetQueryOptimizeExecErrorStatsResponse GetQueryOptimizeExecErrorStatsResponse
     */
    public function getQueryOptimizeExecErrorStats($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeExecErrorStatsWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags added by the query governance feature to specified database instances.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeRuleListRequest $request GetQueryOptimizeRuleListRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeRuleListResponse GetQueryOptimizeRuleListResponse
     */
    public function getQueryOptimizeRuleListWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeRuleList',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeRuleListResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags added by the query governance feature to specified database instances.
     *  *
     * @description *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V2.1.8. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V2.1.8 or later.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeRuleListRequest $request GetQueryOptimizeRuleListRequest
     *
     * @return GetQueryOptimizeRuleListResponse GetQueryOptimizeRuleListResponse
     */
    public function getQueryOptimizeRuleList($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeRuleListWithOptions($request, $runtime);
    }

    /**
     * @summary Queries a share URL provided by the query governance feature.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeShareUrlRequest $request GetQueryOptimizeShareUrlRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeShareUrlResponse GetQueryOptimizeShareUrlResponse
     */
    public function getQueryOptimizeShareUrlWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeShareUrl',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeShareUrlResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries a share URL provided by the query governance feature.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeShareUrlRequest $request GetQueryOptimizeShareUrlRequest
     *
     * @return GetQueryOptimizeShareUrlResponse GetQueryOptimizeShareUrlResponse
     */
    public function getQueryOptimizeShareUrl($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeShareUrlWithOptions($request, $runtime);
    }

    /**
     * @summary Queries suggestions provided by query governance for optimizing an SQL template.
     *  *
     * @description *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeSolutionRequest $request GetQueryOptimizeSolutionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeSolutionResponse GetQueryOptimizeSolutionResponse
     */
    public function getQueryOptimizeSolutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeSolution',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeSolutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries suggestions provided by query governance for optimizing an SQL template.
     *  *
     * @description *   If you use an Alibaba Cloud SDK or a Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeSolutionRequest $request GetQueryOptimizeSolutionRequest
     *
     * @return GetQueryOptimizeSolutionResponse GetQueryOptimizeSolutionResponse
     */
    public function getQueryOptimizeSolution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeSolutionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the tags of a SQL statement.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeTagRequest $request GetQueryOptimizeTagRequest
     * @param RuntimeOptions             $runtime runtime options for this request RuntimeOptions
     *
     * @return GetQueryOptimizeTagResponse GetQueryOptimizeTagResponse
     */
    public function getQueryOptimizeTagWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req   = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetQueryOptimizeTag',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetQueryOptimizeTagResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the tags of a SQL statement.
     *  *
     * @description *   If you use Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   PolarDB for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *  *
     * @param GetQueryOptimizeTagRequest $request GetQueryOptimizeTagRequest
     *
     * @return GetQueryOptimizeTagResponse GetQueryOptimizeTagResponse
     */
    public function getQueryOptimizeTag($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getQueryOptimizeTagWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the current session on an ApsaraDB for Redis instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB for Redis instances.
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
     *  *
     * @param GetRedisAllSessionRequest $request GetRedisAllSessionRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRedisAllSessionResponse GetRedisAllSessionResponse
     */
    public function getRedisAllSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRedisAllSession',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRedisAllSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the current session on an ApsaraDB for Redis instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB for Redis instances.
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * >  This operation cannot be used to query sessions generated in direct connection mode on ApsaraDB for Redis cluster instances.
     *  *
     * @param GetRedisAllSessionRequest $request GetRedisAllSessionRequest
     *
     * @return GetRedisAllSessionResponse GetRedisAllSessionResponse
     */
    public function getRedisAllSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRedisAllSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Queries SQL diagnostics records by pages.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param GetRequestDiagnosisPageRequest $request GetRequestDiagnosisPageRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRequestDiagnosisPageResponse GetRequestDiagnosisPageResponse
     */
    public function getRequestDiagnosisPageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->endTime)) {
            $query['EndTime'] = $request->endTime;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
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
            'action'      => 'GetRequestDiagnosisPage',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRequestDiagnosisPageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries SQL diagnostics records by pages.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (Compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param GetRequestDiagnosisPageRequest $request GetRequestDiagnosisPageRequest
     *
     * @return GetRequestDiagnosisPageResponse GetRequestDiagnosisPageResponse
     */
    public function getRequestDiagnosisPage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRequestDiagnosisPageWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the results of an SQL diagnostics task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param GetRequestDiagnosisResultRequest $request GetRequestDiagnosisResultRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRequestDiagnosisResultResponse GetRequestDiagnosisResultResponse
     */
    public function getRequestDiagnosisResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->messageId)) {
            $query['MessageId'] = $request->messageId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->source)) {
            $query['Source'] = $request->source;
        }
        if (!Utils::isUnset($request->sqlId)) {
            $query['SqlId'] = $request->sqlId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRequestDiagnosisResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRequestDiagnosisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the results of an SQL diagnostics task.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL
     *     *   ApsaraDB RDS for PostgreSQL
     *     *   ApsaraDB RDS for SQL Server
     *     *   PolarDB for MySQL
     *     *   PolarDB for PostgreSQL (compatible with Oracle)
     *     *   ApsaraDB for MongoDB
     * >  The minor engine version of the Apsara RDS for PostgreSQL instance must be 20220130 or later. For more information about how to check and update the minor engine version of an ApsaraDB RDS for PostgreSQL instance, see [Update the minor engine version of an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/146895.html).
     *  *
     * @param GetRequestDiagnosisResultRequest $request GetRequestDiagnosisResultRequest
     *
     * @return GetRequestDiagnosisResultResponse GetRequestDiagnosisResultResponse
     */
    public function getRequestDiagnosisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRequestDiagnosisResultWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the throttling rules that are in effect.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetRunningSqlConcurrencyControlRulesRequest $request GetRunningSqlConcurrencyControlRulesRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetRunningSqlConcurrencyControlRulesResponse GetRunningSqlConcurrencyControlRulesResponse
     */
    public function getRunningSqlConcurrencyControlRulesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetRunningSqlConcurrencyControlRules',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetRunningSqlConcurrencyControlRulesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the throttling rules that are in effect.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetRunningSqlConcurrencyControlRulesRequest $request GetRunningSqlConcurrencyControlRulesRequest
     *
     * @return GetRunningSqlConcurrencyControlRulesResponse GetRunningSqlConcurrencyControlRulesResponse
     */
    public function getRunningSqlConcurrencyControlRules($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getRunningSqlConcurrencyControlRulesWithOptions($request, $runtime);
    }

    /**
     * @summary Generates a throttling keyword string based on an SQL statement.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetSqlConcurrencyControlKeywordsFromSqlTextRequest $request GetSqlConcurrencyControlKeywordsFromSqlTextRequest
     * @param RuntimeOptions                                     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSqlConcurrencyControlKeywordsFromSqlTextResponse GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     */
    public function getSqlConcurrencyControlKeywordsFromSqlTextWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->sqlText)) {
            $query['SqlText'] = $request->sqlText;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSqlConcurrencyControlKeywordsFromSqlText',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSqlConcurrencyControlKeywordsFromSqlTextResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Generates a throttling keyword string based on an SQL statement.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetSqlConcurrencyControlKeywordsFromSqlTextRequest $request GetSqlConcurrencyControlKeywordsFromSqlTextRequest
     *
     * @return GetSqlConcurrencyControlKeywordsFromSqlTextResponse GetSqlConcurrencyControlKeywordsFromSqlTextResponse
     */
    public function getSqlConcurrencyControlKeywordsFromSqlText($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlConcurrencyControlKeywordsFromSqlTextWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the throttling rules that are being executed or have been triggered.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetSqlConcurrencyControlRulesHistoryRequest $request GetSqlConcurrencyControlRulesHistoryRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSqlConcurrencyControlRulesHistoryResponse GetSqlConcurrencyControlRulesHistoryResponse
     */
    public function getSqlConcurrencyControlRulesHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->pageNo)) {
            $query['PageNo'] = $request->pageNo;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSqlConcurrencyControlRulesHistory',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSqlConcurrencyControlRulesHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the throttling rules that are being executed or have been triggered.
     *  *
     * @description This operation supports the following database engines:
     * *   ApsaraDB RDS for MySQL
     * *   PolarDB for MySQL
     *  *
     * @param GetSqlConcurrencyControlRulesHistoryRequest $request GetSqlConcurrencyControlRulesHistoryRequest
     *
     * @return GetSqlConcurrencyControlRulesHistoryResponse GetSqlConcurrencyControlRulesHistoryResponse
     */
    public function getSqlConcurrencyControlRulesHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlConcurrencyControlRulesHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary Queries optimization suggestions that are generated by the SQL diagnostics feature of Database Autonomy Service (DAS).
     *  *
     * @description The SQL diagnostics feature provides optimization suggestions for instances based on diagnostics results. You can use the optimization suggestions to optimize instance indexes. For more information, see [Automatic SQL optimization](https://help.aliyun.com/document_detail/167895.html).
     * >  You can call this operation to query only the optimization suggestions that are automatically generated by the SQL diagnostics feature.
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetSqlOptimizeAdviceRequest $request GetSqlOptimizeAdviceRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return GetSqlOptimizeAdviceResponse GetSqlOptimizeAdviceResponse
     */
    public function getSqlOptimizeAdviceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->endDt)) {
            $query['EndDt'] = $request->endDt;
        }
        if (!Utils::isUnset($request->engine)) {
            $query['Engine'] = $request->engine;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->region)) {
            $query['Region'] = $request->region;
        }
        if (!Utils::isUnset($request->startDt)) {
            $query['StartDt'] = $request->startDt;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSqlOptimizeAdvice',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetSqlOptimizeAdviceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries optimization suggestions that are generated by the SQL diagnostics feature of Database Autonomy Service (DAS).
     *  *
     * @description The SQL diagnostics feature provides optimization suggestions for instances based on diagnostics results. You can use the optimization suggestions to optimize instance indexes. For more information, see [Automatic SQL optimization](https://help.aliyun.com/document_detail/167895.html).
     * >  You can call this operation to query only the optimization suggestions that are automatically generated by the SQL diagnostics feature.
     * Before you call this operation, take note of the following items:
     * *   This operation is applicable to ApsaraDB RDS for MySQL instances and PolarDB for MySQL clusters.
     * *   If you use an Alibaba Cloud SDK or DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetSqlOptimizeAdviceRequest $request GetSqlOptimizeAdviceRequest
     *
     * @return GetSqlOptimizeAdviceResponse GetSqlOptimizeAdviceResponse
     */
    public function getSqlOptimizeAdvice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getSqlOptimizeAdviceWithOptions($request, $runtime);
    }

    /**
     * @summary Queries the status and results of a storage analysis task.
     *  *
     * @description >  The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetStorageAnalysisResultRequest $request GetStorageAnalysisResultRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return GetStorageAnalysisResultResponse GetStorageAnalysisResultResponse
     */
    public function getStorageAnalysisResultWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->nodeId)) {
            $query['NodeId'] = $request->nodeId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStorageAnalysisResult',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetStorageAnalysisResultResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Queries the status and results of a storage analysis task.
     *  *
     * @description >  The physical file size indicates the actual size of an obtained file. Only specific deployment modes of database instances support the display of physical file sizes. The statistics on tables are obtained from `information_schema.tables`. Statistics in MySQL are not updated in real time. Therefore, the statistics may be different from the physical file sizes. If you want to obtain the latest data, you can execute the `ANALYZE TABLE` statement on the relevant tables during off-peak hours.
     * *   This operation is applicable only to ApsaraDB RDS for MySQL instances, PolarDB for MySQL clusters, and ApsaraDB for MongoDB instances.
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call API operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param GetStorageAnalysisResultRequest $request GetStorageAnalysisResultRequest
     *
     * @return GetStorageAnalysisResultResponse GetStorageAnalysisResultResponse
     */
    public function getStorageAnalysisResult($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getStorageAnalysisResultWithOptions($request, $runtime);
    }

    /**
     * @summary Terminates all sessions on an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB for Redis.
     * *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param KillInstanceAllSessionRequest $request KillInstanceAllSessionRequest
     * @param RuntimeOptions                $runtime runtime options for this request RuntimeOptions
     *
     * @return KillInstanceAllSessionResponse KillInstanceAllSessionResponse
     */
    public function killInstanceAllSessionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'KillInstanceAllSession',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return KillInstanceAllSessionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Terminates all sessions on an instance.
     *  *
     * @description *   This operation is applicable only to ApsaraDB for Redis.
     * *   If you use Alibaba Cloud SDK, make sure that the aliyun-sdk-core version is later than V4.3.3. We recommend that you use the latest version.
     * *   The version of your Database Autonomy Service (DAS) SDK must be V1.0.2 or later.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     *  *
     * @param KillInstanceAllSessionRequest $request KillInstanceAllSessionRequest
     *
     * @return KillInstanceAllSessionResponse KillInstanceAllSessionResponse
     */
    public function killInstanceAllSession($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->killInstanceAllSessionWithOptions($request, $runtime);
    }

    /**
     * @summary Modifies the auto scaling configurations of an instance.
     *  *
     * @description You can call this operation to modify the following auto scaling configurations of an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
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
     *  *
     * @param ModifyAutoScalingConfigRequest $request ModifyAutoScalingConfigRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifyAutoScalingConfigResponse ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bandwidth)) {
            $query['Bandwidth'] = $request->bandwidth;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->resource)) {
            $query['Resource'] = $request->resource;
        }
        if (!Utils::isUnset($request->shard)) {
            $query['Shard'] = $request->shard;
        }
        if (!Utils::isUnset($request->spec)) {
            $query['Spec'] = $request->spec;
        }
        if (!Utils::isUnset($request->storage)) {
            $query['Storage'] = $request->storage;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAutoScalingConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAutoScalingConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Modifies the auto scaling configurations of an instance.
     *  *
     * @description You can call this operation to modify the following auto scaling configurations of an instance: **auto scaling for specifications**, **automatic storage expansion**, **automatic bandwidth adjustment**, and **auto scaling for resources**.
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
     *  *
     * @param ModifyAutoScalingConfigRequest $request ModifyAutoScalingConfigRequest
     *
     * @return ModifyAutoScalingConfigResponse ModifyAutoScalingConfigResponse
     */
    public function modifyAutoScalingConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAutoScalingConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Enables or configures Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   By default, the latest version of DAS Enterprise Edition that supports the database instance is enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param ModifySqlLogConfigRequest $request ModifySqlLogConfigRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return ModifySqlLogConfigResponse ModifySqlLogConfigResponse
     */
    public function modifySqlLogConfigWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->filters)) {
            $query['Filters'] = $request->filters;
        }
        $body = [];
        if (!Utils::isUnset($request->enable)) {
            $body['Enable'] = $request->enable;
        }
        if (!Utils::isUnset($request->hotRetention)) {
            $body['HotRetention'] = $request->hotRetention;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $body['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->requestEnable)) {
            $body['RequestEnable'] = $request->requestEnable;
        }
        if (!Utils::isUnset($request->retention)) {
            $body['Retention'] = $request->retention;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifySqlLogConfig',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifySqlLogConfigResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables or configures Database Autonomy Service (DAS) Enterprise Edition for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or a DAS SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call operations of DAS, you must set the region ID to cn-shanghai.
     * *   By default, the latest version of DAS Enterprise Edition that supports the database instance is enabled. For information about the databases and regions that are supported by different versions of DAS Enterprise Edition, see [Editions and supported features](https://help.aliyun.com/document_detail/156204.html).
     *  *
     * @param ModifySqlLogConfigRequest $request ModifySqlLogConfigRequest
     *
     * @return ModifySqlLogConfigResponse ModifySqlLogConfigResponse
     */
    public function modifySqlLogConfig($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifySqlLogConfigWithOptions($request, $runtime);
    }

    /**
     * @summary Runs a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param RunCloudBenchTaskRequest $request RunCloudBenchTaskRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return RunCloudBenchTaskResponse RunCloudBenchTaskResponse
     */
    public function runCloudBenchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'RunCloudBenchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return RunCloudBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Runs a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param RunCloudBenchTaskRequest $request RunCloudBenchTaskRequest
     *
     * @return RunCloudBenchTaskResponse RunCloudBenchTaskResponse
     */
    public function runCloudBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->runCloudBenchTaskWithOptions($request, $runtime);
    }

    /**
     * @summary Configures the event subscription settings for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   Make sure that the database instance that you want to manage is connected to DAS.
     *  *
     * @param SetEventSubscriptionRequest $request SetEventSubscriptionRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return SetEventSubscriptionResponse SetEventSubscriptionResponse
     */
    public function setEventSubscriptionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->active)) {
            $query['Active'] = $request->active;
        }
        if (!Utils::isUnset($request->channelType)) {
            $query['ChannelType'] = $request->channelType;
        }
        if (!Utils::isUnset($request->contactGroupName)) {
            $query['ContactGroupName'] = $request->contactGroupName;
        }
        if (!Utils::isUnset($request->contactName)) {
            $query['ContactName'] = $request->contactName;
        }
        if (!Utils::isUnset($request->dispatchRule)) {
            $query['DispatchRule'] = $request->dispatchRule;
        }
        if (!Utils::isUnset($request->eventContext)) {
            $query['EventContext'] = $request->eventContext;
        }
        if (!Utils::isUnset($request->instanceId)) {
            $query['InstanceId'] = $request->instanceId;
        }
        if (!Utils::isUnset($request->lang)) {
            $query['Lang'] = $request->lang;
        }
        if (!Utils::isUnset($request->level)) {
            $query['Level'] = $request->level;
        }
        if (!Utils::isUnset($request->minInterval)) {
            $query['MinInterval'] = $request->minInterval;
        }
        if (!Utils::isUnset($request->severity)) {
            $query['Severity'] = $request->severity;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SetEventSubscription',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SetEventSubscriptionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Configures the event subscription settings for a database instance.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an Alibaba Cloud SDK or Database Autonomy Service (DAS) SDK to call this operation, we recommend that you use the latest version of the SDK.
     * *   If you use an SDK to call the API operations of DAS, you must set the region ID to cn-shanghai.
     * *   Make sure that the database instance that you want to manage is connected to DAS.
     *  *
     * @param SetEventSubscriptionRequest $request SetEventSubscriptionRequest
     *
     * @return SetEventSubscriptionResponse SetEventSubscriptionResponse
     */
    public function setEventSubscription($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->setEventSubscriptionWithOptions($request, $runtime);
    }

    /**
     * @summary Stops a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param StopCloudBenchTaskRequest $request StopCloudBenchTaskRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return StopCloudBenchTaskResponse StopCloudBenchTaskResponse
     */
    public function stopCloudBenchTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->taskId)) {
            $query['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'StopCloudBenchTask',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return StopCloudBenchTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Stops a stress testing task.
     *  *
     * @description Database Autonomy Service (DAS) provides the intelligent stress testing feature. This feature helps you check whether your instance needs to be scaled up to effectively handle traffic spikes. For more information, see [Intelligent stress testing](https://help.aliyun.com/document_detail/155068.html).
     *  *
     * @param StopCloudBenchTaskRequest $request StopCloudBenchTaskRequest
     *
     * @return StopCloudBenchTaskResponse StopCloudBenchTaskResponse
     */
    public function stopCloudBenchTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->stopCloudBenchTaskWithOptions($request, $runtime);
    }

    /**
     * @param SyncHDMAliyunResourceRequest $request SyncHDMAliyunResourceRequest
     * @param RuntimeOptions               $runtime runtime options for this request RuntimeOptions
     *
     * @return SyncHDMAliyunResourceResponse SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResourceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->async)) {
            $query['Async'] = $request->async;
        }
        if (!Utils::isUnset($request->resourceTypes)) {
            $query['ResourceTypes'] = $request->resourceTypes;
        }
        if (!Utils::isUnset($request->uid)) {
            $query['Uid'] = $request->uid;
        }
        if (!Utils::isUnset($request->userId)) {
            $query['UserId'] = $request->userId;
        }
        if (!Utils::isUnset($request->waitForModifySecurityIps)) {
            $query['WaitForModifySecurityIps'] = $request->waitForModifySecurityIps;
        }
        if (!Utils::isUnset($request->context)) {
            $query['__context'] = $request->context;
        }
        if (!Utils::isUnset($request->accessKey)) {
            $query['accessKey'] = $request->accessKey;
        }
        if (!Utils::isUnset($request->signature)) {
            $query['signature'] = $request->signature;
        }
        if (!Utils::isUnset($request->skipAuth)) {
            $query['skipAuth'] = $request->skipAuth;
        }
        if (!Utils::isUnset($request->timestamp)) {
            $query['timestamp'] = $request->timestamp;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'SyncHDMAliyunResource',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return SyncHDMAliyunResourceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param SyncHDMAliyunResourceRequest $request SyncHDMAliyunResourceRequest
     *
     * @return SyncHDMAliyunResourceResponse SyncHDMAliyunResourceResponse
     */
    public function syncHDMAliyunResource($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->syncHDMAliyunResourceWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously configures parameters related to the automatic fragment recycling feature for multiple database instances at a time.
     *  *
     * @description >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * *   DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * *   The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
     *  *
     * @param UpdateAutoResourceOptimizeRulesAsyncRequest $request UpdateAutoResourceOptimizeRulesAsyncRequest
     * @param RuntimeOptions                              $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAutoResourceOptimizeRulesAsyncResponse UpdateAutoResourceOptimizeRulesAsyncResponse
     */
    public function updateAutoResourceOptimizeRulesAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->resultId)) {
            $query['ResultId'] = $request->resultId;
        }
        if (!Utils::isUnset($request->tableFragmentationRatio)) {
            $query['TableFragmentationRatio'] = $request->tableFragmentationRatio;
        }
        if (!Utils::isUnset($request->tableSpaceSize)) {
            $query['TableSpaceSize'] = $request->tableSpaceSize;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoResourceOptimizeRulesAsync',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoResourceOptimizeRulesAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously configures parameters related to the automatic fragment recycling feature for multiple database instances at a time.
     *  *
     * @description >  Asynchronous calls do not immediately return the complete results. To obtain the complete results, you must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.**** In this case, you must call this operation at least twice.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The database instances must be an ApsaraDB RDS for MySQL High-availability Edition instance.
     * *   DAS Enterprise Edition must be enabled for the database instance. You can call the call [DescribeInstanceDasPro](https://help.aliyun.com/document_detail/413866.html) operation to query whether DAS Enterprise Edition is enabled.
     * *   The database instance has four or more CPU cores, and **innodb_file_per_table** is set to **ON**.
     *  *
     * @param UpdateAutoResourceOptimizeRulesAsyncRequest $request UpdateAutoResourceOptimizeRulesAsyncRequest
     *
     * @return UpdateAutoResourceOptimizeRulesAsyncResponse UpdateAutoResourceOptimizeRulesAsyncResponse
     */
    public function updateAutoResourceOptimizeRulesAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoResourceOptimizeRulesAsyncWithOptions($request, $runtime);
    }

    /**
     * @summary Enables, modifies, or disables the automatic SQL optimization feature for multiple database instances at a time.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *     *   PolarDB for MySQL Cluster Edition or X-Engine Edition
     *  *
     * @param UpdateAutoSqlOptimizeStatusRequest $request UpdateAutoSqlOptimizeStatusRequest
     * @param RuntimeOptions                     $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAutoSqlOptimizeStatusResponse UpdateAutoSqlOptimizeStatusResponse
     */
    public function updateAutoSqlOptimizeStatusWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->instances)) {
            $query['Instances'] = $request->instances;
        }
        if (!Utils::isUnset($request->status)) {
            $query['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoSqlOptimizeStatus',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoSqlOptimizeStatusResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Enables, modifies, or disables the automatic SQL optimization feature for multiple database instances at a time.
     *  *
     * @description Before you call this operation, take note of the following items:
     * *   If you use an SDK to call API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   DAS Enterprise Edition must be enabled for the database instance that you want to manage. To enable DAS Enterprise Edition for a database instance, you can call the [EnableDasPro](https://help.aliyun.com/document_detail/411645.html) operation.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   This operation supports the following database engines:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition
     *     *   PolarDB for MySQL Cluster Edition or X-Engine Edition
     *  *
     * @param UpdateAutoSqlOptimizeStatusRequest $request UpdateAutoSqlOptimizeStatusRequest
     *
     * @return UpdateAutoSqlOptimizeStatusResponse UpdateAutoSqlOptimizeStatusResponse
     */
    public function updateAutoSqlOptimizeStatus($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoSqlOptimizeStatusWithOptions($request, $runtime);
    }

    /**
     * @summary Asynchronously configures parameters related to the automatic SQL throttling feature for multiple database instances at a time.
     *  *
     * @description >  Asynchronous calls do not immediately return the complete results. You must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0, or PolarDB for MySQL X-Engine Edition that runs MySQL 8.0
     *  *
     * @param UpdateAutoThrottleRulesAsyncRequest $request UpdateAutoThrottleRulesAsyncRequest
     * @param RuntimeOptions                      $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAutoThrottleRulesAsyncResponse UpdateAutoThrottleRulesAsyncResponse
     */
    public function updateAutoThrottleRulesAsyncWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->abnormalDuration)) {
            $query['AbnormalDuration'] = $request->abnormalDuration;
        }
        if (!Utils::isUnset($request->activeSessions)) {
            $query['ActiveSessions'] = $request->activeSessions;
        }
        if (!Utils::isUnset($request->allowThrottleEndTime)) {
            $query['AllowThrottleEndTime'] = $request->allowThrottleEndTime;
        }
        if (!Utils::isUnset($request->allowThrottleStartTime)) {
            $query['AllowThrottleStartTime'] = $request->allowThrottleStartTime;
        }
        if (!Utils::isUnset($request->autoKillSession)) {
            $query['AutoKillSession'] = $request->autoKillSession;
        }
        if (!Utils::isUnset($request->consoleContext)) {
            $query['ConsoleContext'] = $request->consoleContext;
        }
        if (!Utils::isUnset($request->cpuSessionRelation)) {
            $query['CpuSessionRelation'] = $request->cpuSessionRelation;
        }
        if (!Utils::isUnset($request->cpuUsage)) {
            $query['CpuUsage'] = $request->cpuUsage;
        }
        if (!Utils::isUnset($request->instanceIds)) {
            $query['InstanceIds'] = $request->instanceIds;
        }
        if (!Utils::isUnset($request->maxThrottleTime)) {
            $query['MaxThrottleTime'] = $request->maxThrottleTime;
        }
        if (!Utils::isUnset($request->resultId)) {
            $query['ResultId'] = $request->resultId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAutoThrottleRulesAsync',
            'version'     => '2020-01-16',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAutoThrottleRulesAsyncResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary Asynchronously configures parameters related to the automatic SQL throttling feature for multiple database instances at a time.
     *  *
     * @description >  Asynchronous calls do not immediately return the complete results. You must use the value of **ResultId** returned in the response to re-initiate the call until the value of **isFinish** is **true**.
     * Before you call this operation, take note of the following items:
     * *   If you use an SDK to call the API operations of Database Autonomy Service (DAS), you must set the region ID to cn-shanghai.
     * *   The autonomy service must be enabled for the database instance that you want to manage. For more information, see [Autonomy center](https://help.aliyun.com/document_detail/152139.html).
     * *   The database instance that you want to manage must be of one of the following types:
     *     *   ApsaraDB RDS for MySQL High-availability Edition or Enterprise Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0
     *     *   PolarDB for MySQL Cluster Edition that runs MySQL 5.6, MySQL 5.7, or MySQL 8.0, or PolarDB for MySQL X-Engine Edition that runs MySQL 8.0
     *  *
     * @param UpdateAutoThrottleRulesAsyncRequest $request UpdateAutoThrottleRulesAsyncRequest
     *
     * @return UpdateAutoThrottleRulesAsyncResponse UpdateAutoThrottleRulesAsyncResponse
     */
    public function updateAutoThrottleRulesAsync($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAutoThrottleRulesAsyncWithOptions($request, $runtime);
    }
}
