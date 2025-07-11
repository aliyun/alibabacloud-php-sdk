<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateClusterShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\DeleteJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ExportJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionThreadDumpRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionThreadDumpResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetLogResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportCalendarRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportCalendarResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ImportJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAlarmEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppNamesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppNamesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListAppsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarNamesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListCalendarNamesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListClustersResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobExecutionsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobExecutionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobScriptHistoryResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListLablesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListLablesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListRegionsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListRegionZoneResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleEventRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleEventResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleTimesRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\ListScheduleTimesResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDesignateExecutorsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateDisableJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateEnableJobsShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateExecuteJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRerunJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRerunJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateRetryJobExecutionShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\OperateStopJobExecutionShrinkRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateAppRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateAppResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobScriptRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobScriptResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobShrinkRequest;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class SchedulerX3 extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('schedulerx3', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
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
     * @summary 创建应用
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessToken)) {
            $body['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->enableLog)) {
            $body['EnableLog'] = $request->enableLog;
        }
        if (!Utils::isUnset($request->labelRouteStrategy)) {
            $body['LabelRouteStrategy'] = $request->labelRouteStrategy;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建应用
     *  *
     * @param CreateAppRequest $request CreateAppRequest
     *
     * @return CreateAppResponse CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * @summary 创建集群
     *  *
     * @param CreateClusterRequest $tmpReq  CreateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateClusterShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->vSwitches)) {
            $request->vSwitchesShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->vSwitches, 'VSwitches', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->tag)) {
            $query['Tag'] = $request->tag;
        }
        $body = [];
        if (!Utils::isUnset($request->clusterName)) {
            $body['ClusterName'] = $request->clusterName;
        }
        if (!Utils::isUnset($request->clusterSpec)) {
            $body['ClusterSpec'] = $request->clusterSpec;
        }
        if (!Utils::isUnset($request->engineType)) {
            $body['EngineType'] = $request->engineType;
        }
        if (!Utils::isUnset($request->vSwitchesShrink)) {
            $body['VSwitches'] = $request->vSwitchesShrink;
        }
        if (!Utils::isUnset($request->vpcId)) {
            $body['VpcId'] = $request->vpcId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建集群
     *  *
     * @param CreateClusterRequest $request CreateClusterRequest
     *
     * @return CreateClusterResponse CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateJobRequest $tmpReq  CreateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->noticeConfig)) {
            $request->noticeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->noticeContacts)) {
            $request->noticeContactsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->attemptInterval)) {
            $body['AttemptInterval'] = $request->attemptInterval;
        }
        if (!Utils::isUnset($request->calendar)) {
            $body['Calendar'] = $request->calendar;
        }
        if (!Utils::isUnset($request->childJobId)) {
            $body['ChildJobId'] = $request->childJobId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executorBlockStrategy)) {
            $body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }
        if (!Utils::isUnset($request->jobHandler)) {
            $body['JobHandler'] = $request->jobHandler;
        }
        if (!Utils::isUnset($request->jobType)) {
            $body['JobType'] = $request->jobType;
        }
        if (!Utils::isUnset($request->maxAttempt)) {
            $body['MaxAttempt'] = $request->maxAttempt;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->noticeConfigShrink)) {
            $body['NoticeConfig'] = $request->noticeConfigShrink;
        }
        if (!Utils::isUnset($request->noticeContactsShrink)) {
            $body['NoticeContacts'] = $request->noticeContactsShrink;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->routeStrategy)) {
            $body['RouteStrategy'] = $request->routeStrategy;
        }
        if (!Utils::isUnset($request->script)) {
            $body['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'CreateJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return CreateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 创建任务
     *  *
     * @param CreateJobRequest $request CreateJobRequest
     *
     * @return CreateJobResponse CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * @summary 删除应用分组
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 删除应用分组
     *  *
     * @param DeleteAppRequest $request DeleteAppRequest
     *
     * @return DeleteAppResponse DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * @summary 释放删除集群
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'DeleteCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 释放删除集群
     *  *
     * @param DeleteClusterRequest $request DeleteClusterRequest
     *
     * @return DeleteClusterResponse DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 批量删除任务
     *  *
     * @param DeleteJobsRequest $tmpReq  DeleteJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return DeleteJobsResponse DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new DeleteJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobIds)) {
            $request->jobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIdsShrink)) {
            $body['JobIds'] = $request->jobIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'DeleteJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return DeleteJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量删除任务
     *  *
     * @param DeleteJobsRequest $request DeleteJobsRequest
     *
     * @return DeleteJobsResponse DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量导出任务信息
     *  *
     * @param ExportJobsRequest $tmpReq  ExportJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ExportJobsResponse ExportJobsResponse
     */
    public function exportJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ExportJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobIds)) {
            $request->jobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->exportJobType)) {
            $body['ExportJobType'] = $request->exportJobType;
        }
        if (!Utils::isUnset($request->jobIdsShrink)) {
            $body['JobIds'] = $request->jobIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ExportJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'byte',
        ]);

        return ExportJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量导出任务信息
     *  *
     * @param ExportJobsRequest $request ExportJobsRequest
     *
     * @return ExportJobsResponse ExportJobsResponse
     */
    public function exportJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定应用
     *  *
     * @param GetAppRequest  $request GetAppRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定应用
     *  *
     * @param GetAppRequest $request GetAppRequest
     *
     * @return GetAppResponse GetAppResponse
     */
    public function getApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getAppWithOptions($request, $runtime);
    }

    /**
     * @summary 获取集群详细信息
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取集群详细信息
     *  *
     * @param GetClusterRequest $request GetClusterRequest
     *
     * @return GetClusterResponse GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定机器信息
     *  *
     * @param GetDesigateInfoRequest $request GetDesigateInfoRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetDesigateInfoResponse GetDesigateInfoResponse
     */
    public function getDesigateInfoWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetDesigateInfo',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetDesigateInfoResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定机器信息
     *  *
     * @param GetDesigateInfoRequest $request GetDesigateInfoRequest
     *
     * @return GetDesigateInfoResponse GetDesigateInfoResponse
     */
    public function getDesigateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDesigateInfoWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务执行的详细信息
     *  *
     * @param GetJobExecutionRequest $request GetJobExecutionRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobExecutionResponse GetJobExecutionResponse
     */
    public function getJobExecutionWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobExecutionId)) {
            $query['JobExecutionId'] = $request->jobExecutionId;
        }
        if (!Utils::isUnset($request->mseSessionId)) {
            $query['MseSessionId'] = $request->mseSessionId;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务执行的详细信息
     *  *
     * @param GetJobExecutionRequest $request GetJobExecutionRequest
     *
     * @return GetJobExecutionResponse GetJobExecutionResponse
     */
    public function getJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务执行的详情
     *  *
     * @param GetJobExecutionProgressRequest $request GetJobExecutionProgressRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobExecutionProgressResponse GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgressWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecutionProgress',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionProgressResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务执行的详情
     *  *
     * @param GetJobExecutionProgressRequest $request GetJobExecutionProgressRequest
     *
     * @return GetJobExecutionProgressResponse GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionProgressWithOptions($request, $runtime);
    }

    /**
     * @summary 查询任务的线程堆栈
     *  *
     * @param GetJobExecutionThreadDumpRequest $request GetJobExecutionThreadDumpRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return GetJobExecutionThreadDumpResponse GetJobExecutionThreadDumpResponse
     */
    public function getJobExecutionThreadDumpWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetJobExecutionThreadDump',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetJobExecutionThreadDumpResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询任务的线程堆栈
     *  *
     * @param GetJobExecutionThreadDumpRequest $request GetJobExecutionThreadDumpRequest
     *
     * @return GetJobExecutionThreadDumpResponse GetJobExecutionThreadDumpResponse
     */
    public function getJobExecutionThreadDump($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionThreadDumpWithOptions($request, $runtime);
    }

    /**
     * @summary 查询日志
     *  *
     * @param GetLogRequest  $request GetLogRequest
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLogResponse GetLogResponse
     */
    public function getLogWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLog',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询日志
     *  *
     * @param GetLogRequest $request GetLogRequest
     *
     * @return GetLogResponse GetLogResponse
     */
    public function getLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogWithOptions($request, $runtime);
    }

    /**
     * @summary 查询事件
     *  *
     * @param GetLogEventRequest $request GetLogEventRequest
     * @param RuntimeOptions     $runtime runtime options for this request RuntimeOptions
     *
     * @return GetLogEventResponse GetLogEventResponse
     */
    public function getLogEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'GetLogEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return GetLogEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询事件
     *  *
     * @param GetLogEventRequest $request GetLogEventRequest
     *
     * @return GetLogEventResponse GetLogEventResponse
     */
    public function getLogEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogEventWithOptions($request, $runtime);
    }

    /**
     * @summary 导入日历
     *  *
     * @param ImportCalendarRequest $request ImportCalendarRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportCalendarResponse ImportCalendarResponse
     */
    public function importCalendarWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->months)) {
            $body['Months'] = $request->months;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->year)) {
            $body['Year'] = $request->year;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportCalendar',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportCalendarResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 导入日历
     *  *
     * @param ImportCalendarRequest $request ImportCalendarRequest
     *
     * @return ImportCalendarResponse ImportCalendarResponse
     */
    public function importCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCalendarWithOptions($request, $runtime);
    }

    /**
     * @summary 批量导入任务
     *  *
     * @param ImportJobsRequest $request ImportJobsRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ImportJobsResponse ImportJobsResponse
     */
    public function importJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->autoCreateApp)) {
            $body['AutoCreateApp'] = $request->autoCreateApp;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->content)) {
            $body['Content'] = $request->content;
        }
        if (!Utils::isUnset($request->overwrite)) {
            $body['Overwrite'] = $request->overwrite;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'ImportJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ImportJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量导入任务
     *  *
     * @param ImportJobsRequest $request ImportJobsRequest
     *
     * @return ImportJobsResponse ImportJobsResponse
     */
    public function importJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取报警事件
     *  *
     * @param ListAlarmEventRequest $request ListAlarmEventRequest
     * @param RuntimeOptions        $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAlarmEventResponse ListAlarmEventResponse
     */
    public function listAlarmEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAlarmEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAlarmEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取报警事件
     *  *
     * @param ListAlarmEventRequest $request ListAlarmEventRequest
     *
     * @return ListAlarmEventResponse ListAlarmEventResponse
     */
    public function listAlarmEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmEventWithOptions($request, $runtime);
    }

    /**
     * @summary 获取应用名字列表
     *  *
     * @param ListAppNamesRequest $request ListAppNamesRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppNamesResponse ListAppNamesResponse
     */
    public function listAppNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListAppNames',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用名字列表
     *  *
     * @param ListAppNamesRequest $request ListAppNamesRequest
     *
     * @return ListAppNamesResponse ListAppNamesResponse
     */
    public function listAppNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppNamesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListApps',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListAppsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取应用列表
     *  *
     * @param ListAppsRequest $request ListAppsRequest
     *
     * @return ListAppsResponse ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取日历名字列表
     *  *
     * @param ListCalendarNamesRequest $request ListCalendarNamesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListCalendarNamesResponse ListCalendarNamesResponse
     */
    public function listCalendarNamesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListCalendarNames',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListCalendarNamesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取日历名字列表
     *  *
     * @param ListCalendarNamesRequest $request ListCalendarNamesRequest
     *
     * @return ListCalendarNamesResponse ListCalendarNamesResponse
     */
    public function listCalendarNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalendarNamesWithOptions($request, $runtime);
    }

    /**
     * @summary 查询实例列表
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     * @param RuntimeOptions      $runtime runtime options for this request RuntimeOptions
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListClusters',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListClustersResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询实例列表
     *  *
     * @param ListClustersRequest $request ListClustersRequest
     *
     * @return ListClustersResponse ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * @summary 查询Executor列表
     *  *
     * @param ListExecutorsRequest $request ListExecutorsRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return ListExecutorsResponse ListExecutorsResponse
     */
    public function listExecutorsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询Executor列表
     *  *
     * @param ListExecutorsRequest $request ListExecutorsRequest
     *
     * @return ListExecutorsResponse ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务实例列表
     *  *
     * @param ListJobExecutionsRequest $request ListJobExecutionsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobExecutionsResponse ListJobExecutionsResponse
     */
    public function listJobExecutionsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobExecutions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobExecutionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务实例列表
     *  *
     * @param ListJobExecutionsRequest $request ListJobExecutionsRequest
     *
     * @return ListJobExecutionsResponse ListJobExecutionsResponse
     */
    public function listJobExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutionsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务脚本历史列表
     *  *
     * @param ListJobScriptHistoryRequest $request ListJobScriptHistoryRequest
     * @param RuntimeOptions              $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobScriptHistoryResponse ListJobScriptHistoryResponse
     */
    public function listJobScriptHistoryWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxResults)) {
            $query['MaxResults'] = $request->maxResults;
        }
        if (!Utils::isUnset($request->nextToken)) {
            $query['NextToken'] = $request->nextToken;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobScriptHistory',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobScriptHistoryResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务脚本历史列表
     *  *
     * @param ListJobScriptHistoryRequest $request ListJobScriptHistoryRequest
     *
     * @return ListJobScriptHistoryResponse ListJobScriptHistoryResponse
     */
    public function listJobScriptHistory($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobScriptHistoryWithOptions($request, $runtime);
    }

    /**
     * @summary 获取任务列表
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     * @param RuntimeOptions  $runtime runtime options for this request RuntimeOptions
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取任务列表
     *  *
     * @param ListJobsRequest $request ListJobsRequest
     *
     * @return ListJobsResponse ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 获取executor的label列表
     *  *
     * @param ListLablesRequest $request ListLablesRequest
     * @param RuntimeOptions    $runtime runtime options for this request RuntimeOptions
     *
     * @return ListLablesResponse ListLablesResponse
     */
    public function listLablesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListLables',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListLablesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取executor的label列表
     *  *
     * @param ListLablesRequest $request ListLablesRequest
     *
     * @return ListLablesResponse ListLablesResponse
     */
    public function listLables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLablesWithOptions($request, $runtime);
    }

    /**
     * @summary 获取可用区列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionZoneResponse ListRegionZoneResponse
     */
    public function listRegionZoneWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegionZone',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionZoneResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取可用区列表
     *  *
     * @return ListRegionZoneResponse ListRegionZoneResponse
     */
    public function listRegionZone()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionZoneWithOptions($runtime);
    }

    /**
     * @summary 获取所有region列表
     *  *
     * @param RuntimeOptions $runtime runtime options for this request RuntimeOptions
     *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req = new OpenApiRequest([]);
        $params = new Params([
            'action' => 'ListRegions',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取所有region列表
     *  *
     * @return ListRegionsResponse ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @summary 查询调度事件
     *  *
     * @param ListScheduleEventRequest $request ListScheduleEventRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScheduleEventResponse ListScheduleEventResponse
     */
    public function listScheduleEventWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduleEvent',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduleEventResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 查询调度事件
     *  *
     * @param ListScheduleEventRequest $request ListScheduleEventRequest
     *
     * @return ListScheduleEventResponse ListScheduleEventResponse
     */
    public function listScheduleEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleEventWithOptions($request, $runtime);
    }

    /**
     * @summary 获取指定时间类型和表达式未来5次调度时间
     *  *
     * @param ListScheduleTimesRequest $request ListScheduleTimesRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return ListScheduleTimesResponse ListScheduleTimesResponse
     */
    public function listScheduleTimesWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = OpenApiUtilClient::query(Utils::toMap($request));
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'ListScheduleTimes',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'GET',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return ListScheduleTimesResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 获取指定时间类型和表达式未来5次调度时间
     *  *
     * @param ListScheduleTimesRequest $request ListScheduleTimesRequest
     *
     * @return ListScheduleTimesResponse ListScheduleTimesResponse
     */
    public function listScheduleTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleTimesWithOptions($request, $runtime);
    }

    /**
     * @summary 指定执行器
     *  *
     * @param OperateDesignateExecutorsRequest $tmpReq  OperateDesignateExecutorsRequest
     * @param RuntimeOptions                   $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateDesignateExecutorsResponse OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutorsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateDesignateExecutorsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->addressList)) {
            $request->addressListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->addressList, 'AddressList', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->addressListShrink)) {
            $body['AddressList'] = $request->addressListShrink;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->designateType)) {
            $body['DesignateType'] = $request->designateType;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->transferable)) {
            $body['Transferable'] = $request->transferable;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateDesignateExecutors',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateDesignateExecutorsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 指定执行器
     *  *
     * @param OperateDesignateExecutorsRequest $request OperateDesignateExecutorsRequest
     *
     * @return OperateDesignateExecutorsResponse OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDesignateExecutorsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量禁用任务
     *  *
     * @param OperateDisableJobsRequest $tmpReq  OperateDisableJobsRequest
     * @param RuntimeOptions            $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateDisableJobsResponse OperateDisableJobsResponse
     */
    public function operateDisableJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateDisableJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobIds)) {
            $request->jobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIdsShrink)) {
            $body['JobIds'] = $request->jobIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateDisableJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateDisableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量禁用任务
     *  *
     * @param OperateDisableJobsRequest $request OperateDisableJobsRequest
     *
     * @return OperateDisableJobsResponse OperateDisableJobsResponse
     */
    public function operateDisableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDisableJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 批量启用任务
     *  *
     * @param OperateEnableJobsRequest $tmpReq  OperateEnableJobsRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateEnableJobsResponse OperateEnableJobsResponse
     */
    public function operateEnableJobsWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateEnableJobsShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->jobIds)) {
            $request->jobIdsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobIdsShrink)) {
            $body['JobIds'] = $request->jobIdsShrink;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateEnableJobs',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateEnableJobsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 批量启用任务
     *  *
     * @param OperateEnableJobsRequest $request OperateEnableJobsRequest
     *
     * @return OperateEnableJobsResponse OperateEnableJobsResponse
     */
    public function operateEnableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateEnableJobsWithOptions($request, $runtime);
    }

    /**
     * @summary 运行一次任务
     *  *
     * @param OperateExecuteJobRequest $request OperateExecuteJobRequest
     * @param RuntimeOptions           $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateExecuteJobResponse OperateExecuteJobResponse
     */
    public function operateExecuteJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->instanceParameters)) {
            $body['InstanceParameters'] = $request->instanceParameters;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->label)) {
            $body['Label'] = $request->label;
        }
        if (!Utils::isUnset($request->worker)) {
            $body['Worker'] = $request->worker;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'OperateExecuteJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateExecuteJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 运行一次任务
     *  *
     * @param OperateExecuteJobRequest $request OperateExecuteJobRequest
     *
     * @return OperateExecuteJobResponse OperateExecuteJobResponse
     */
    public function operateExecuteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateExecuteJobWithOptions($request, $runtime);
    }

    /**
     * @summary 重刷任务历史数据
     *  *
     * @param OperateRerunJobRequest $request OperateRerunJobRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateRerunJobResponse OperateRerunJobResponse
     */
    public function operateRerunJobWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->dataTime)) {
            $query['DataTime'] = $request->dataTime;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['EndDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->jobId)) {
            $query['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['StartDate'] = $request->startDate;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateRerunJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateRerunJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重刷任务历史数据
     *  *
     * @param OperateRerunJobRequest $request OperateRerunJobRequest
     *
     * @return OperateRerunJobResponse OperateRerunJobResponse
     */
    public function operateRerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRerunJobWithOptions($request, $runtime);
    }

    /**
     * @summary 重跑失败的任务实例
     *  *
     * @param OperateRetryJobExecutionRequest $tmpReq  OperateRetryJobExecutionRequest
     * @param RuntimeOptions                  $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateRetryJobExecutionResponse OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecutionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateRetryJobExecutionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskList)) {
            $request->taskListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobExecutionId)) {
            $query['JobExecutionId'] = $request->jobExecutionId;
        }
        if (!Utils::isUnset($request->taskListShrink)) {
            $query['TaskList'] = $request->taskListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateRetryJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateRetryJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 重跑失败的任务实例
     *  *
     * @param OperateRetryJobExecutionRequest $request OperateRetryJobExecutionRequest
     *
     * @return OperateRetryJobExecutionResponse OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRetryJobExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary 停止正在运行的任务实例
     *  *
     * @param OperateStopJobExecutionRequest $tmpReq  OperateStopJobExecutionRequest
     * @param RuntimeOptions                 $runtime runtime options for this request RuntimeOptions
     *
     * @return OperateStopJobExecutionResponse OperateStopJobExecutionResponse
     */
    public function operateStopJobExecutionWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new OperateStopJobExecutionShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->taskList)) {
            $request->taskListShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appName)) {
            $query['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobExecutionId)) {
            $query['JobExecutionId'] = $request->jobExecutionId;
        }
        if (!Utils::isUnset($request->taskListShrink)) {
            $query['TaskList'] = $request->taskListShrink;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'OperateStopJobExecution',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return OperateStopJobExecutionResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 停止正在运行的任务实例
     *  *
     * @param OperateStopJobExecutionRequest $request OperateStopJobExecutionRequest
     *
     * @return OperateStopJobExecutionResponse OperateStopJobExecutionResponse
     */
    public function operateStopJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateStopJobExecutionWithOptions($request, $runtime);
    }

    /**
     * @summary 更新应用分组
     *  *
     * @param UpdateAppRequest $request UpdateAppRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateAppResponse UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->accessToken)) {
            $body['AccessToken'] = $request->accessToken;
        }
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->enableLog)) {
            $body['EnableLog'] = $request->enableLog;
        }
        if (!Utils::isUnset($request->labelRouteStrategy)) {
            $body['LabelRouteStrategy'] = $request->labelRouteStrategy;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->title)) {
            $body['Title'] = $request->title;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateApp',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateAppResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新应用分组
     *  *
     * @param UpdateAppRequest $request UpdateAppRequest
     *
     * @return UpdateAppResponse UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * @summary 更新集群
     *  *
     * @param UpdateClusterRequest $request UpdateClusterRequest
     * @param RuntimeOptions       $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->clusterId)) {
            $query['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->clusterName)) {
            $query['ClusterName'] = $request->clusterName;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action' => 'UpdateCluster',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateClusterResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新集群
     *  *
     * @param UpdateClusterRequest $request UpdateClusterRequest
     *
     * @return UpdateClusterResponse UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * @summary 更新任务信息
     *  *
     * @param UpdateJobRequest $tmpReq  UpdateJobRequest
     * @param RuntimeOptions   $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJobWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new UpdateJobShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->noticeConfig)) {
            $request->noticeConfigShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }
        if (!Utils::isUnset($tmpReq->noticeContacts)) {
            $request->noticeContactsShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->attemptInterval)) {
            $body['AttemptInterval'] = $request->attemptInterval;
        }
        if (!Utils::isUnset($request->calendar)) {
            $body['Calendar'] = $request->calendar;
        }
        if (!Utils::isUnset($request->childJobId)) {
            $body['ChildJobId'] = $request->childJobId;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->description)) {
            $body['Description'] = $request->description;
        }
        if (!Utils::isUnset($request->executorBlockStrategy)) {
            $body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }
        if (!Utils::isUnset($request->jobHandler)) {
            $body['JobHandler'] = $request->jobHandler;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->maxAttempt)) {
            $body['MaxAttempt'] = $request->maxAttempt;
        }
        if (!Utils::isUnset($request->maxConcurrency)) {
            $body['MaxConcurrency'] = $request->maxConcurrency;
        }
        if (!Utils::isUnset($request->name)) {
            $body['Name'] = $request->name;
        }
        if (!Utils::isUnset($request->noticeConfigShrink)) {
            $body['NoticeConfig'] = $request->noticeConfigShrink;
        }
        if (!Utils::isUnset($request->noticeContactsShrink)) {
            $body['NoticeContacts'] = $request->noticeContactsShrink;
        }
        if (!Utils::isUnset($request->parameters)) {
            $body['Parameters'] = $request->parameters;
        }
        if (!Utils::isUnset($request->priority)) {
            $body['Priority'] = $request->priority;
        }
        if (!Utils::isUnset($request->routeStrategy)) {
            $body['RouteStrategy'] = $request->routeStrategy;
        }
        if (!Utils::isUnset($request->script)) {
            $body['Script'] = $request->script;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->timeExpression)) {
            $body['TimeExpression'] = $request->timeExpression;
        }
        if (!Utils::isUnset($request->timeType)) {
            $body['TimeType'] = $request->timeType;
        }
        if (!Utils::isUnset($request->timezone)) {
            $body['Timezone'] = $request->timezone;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJob',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新任务信息
     *  *
     * @param UpdateJobRequest $request UpdateJobRequest
     *
     * @return UpdateJobResponse UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }

    /**
     * @summary 更新任务脚本内容
     *  *
     * @param UpdateJobScriptRequest $request UpdateJobScriptRequest
     * @param RuntimeOptions         $runtime runtime options for this request RuntimeOptions
     *
     * @return UpdateJobScriptResponse UpdateJobScriptResponse
     */
    public function updateJobScriptWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appName)) {
            $body['AppName'] = $request->appName;
        }
        if (!Utils::isUnset($request->clusterId)) {
            $body['ClusterId'] = $request->clusterId;
        }
        if (!Utils::isUnset($request->jobId)) {
            $body['JobId'] = $request->jobId;
        }
        if (!Utils::isUnset($request->scriptContent)) {
            $body['ScriptContent'] = $request->scriptContent;
        }
        if (!Utils::isUnset($request->versionDescription)) {
            $body['VersionDescription'] = $request->versionDescription;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action' => 'UpdateJobScript',
            'version' => '2024-06-24',
            'protocol' => 'HTTPS',
            'pathname' => '/',
            'method' => 'POST',
            'authType' => 'AK',
            'style' => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType' => 'json',
        ]);

        return UpdateJobScriptResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @summary 更新任务脚本内容
     *  *
     * @param UpdateJobScriptRequest $request UpdateJobScriptRequest
     *
     * @return UpdateJobScriptResponse UpdateJobScriptResponse
     */
    public function updateJobScript($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobScriptWithOptions($request, $runtime);
    }
}
