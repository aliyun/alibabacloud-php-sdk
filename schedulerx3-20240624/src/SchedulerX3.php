<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624;

use AlibabaCloud\Dara\Models\RuntimeOptions;
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
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetClusterResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetDesigateInfoResponse;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressRequest;
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\GetJobExecutionProgressResponse;
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
use AlibabaCloud\SDK\SchedulerX3\V20240624\Models\UpdateJobShrinkRequest;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;
use Darabonba\OpenApi\Utils;

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
        if (null !== $endpoint) {
            return $endpoint;
        }

        if (null !== $endpointMap && null !== @$endpointMap[$regionId]) {
            return @$endpointMap[$regionId];
        }

        return Utils::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * 创建应用.
     *
     * @param request - CreateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return CreateAppResponse
     */
    public function createAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessToken) {
            @$body['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableLog) {
            @$body['EnableLog'] = $request->enableLog;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 创建应用.
     *
     * @param request - CreateAppRequest
     *
     * @returns CreateAppResponse
     *
     * @param CreateAppRequest $request
     *
     * @return CreateAppResponse
     */
    public function createApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppWithOptions($request, $runtime);
    }

    /**
     * 创建集群.
     *
     * @param tmpReq - CreateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $tmpReq
     * @param RuntimeOptions       $runtime
     *
     * @return CreateClusterResponse
     */
    public function createClusterWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateClusterShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->vSwitches) {
            $request->vSwitchesShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->vSwitches, 'VSwitches', 'json');
        }

        $body = [];
        if (null !== $request->clusterName) {
            @$body['ClusterName'] = $request->clusterName;
        }

        if (null !== $request->clusterSpec) {
            @$body['ClusterSpec'] = $request->clusterSpec;
        }

        if (null !== $request->engineType) {
            @$body['EngineType'] = $request->engineType;
        }

        if (null !== $request->vSwitchesShrink) {
            @$body['VSwitches'] = $request->vSwitchesShrink;
        }

        if (null !== $request->vpcId) {
            @$body['VpcId'] = $request->vpcId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 创建集群.
     *
     * @param request - CreateClusterRequest
     *
     * @returns CreateClusterResponse
     *
     * @param CreateClusterRequest $request
     *
     * @return CreateClusterResponse
     */
    public function createCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createClusterWithOptions($request, $runtime);
    }

    /**
     * 创建任务
     *
     * @param tmpReq - CreateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return CreateJobResponse
     */
    public function createJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new CreateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->noticeConfig) {
            $request->noticeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }

        if (null !== $tmpReq->noticeContacts) {
            $request->noticeContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->childJobId) {
            @$body['ChildJobId'] = $request->childJobId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->executorBlockStrategy) {
            @$body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }

        if (null !== $request->jobHandler) {
            @$body['JobHandler'] = $request->jobHandler;
        }

        if (null !== $request->jobType) {
            @$body['JobType'] = $request->jobType;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->noticeConfigShrink) {
            @$body['NoticeConfig'] = $request->noticeConfigShrink;
        }

        if (null !== $request->noticeContactsShrink) {
            @$body['NoticeContacts'] = $request->noticeContactsShrink;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->routeStrategy) {
            @$body['RouteStrategy'] = $request->routeStrategy;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->status) {
            @$body['Status'] = $request->status;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 创建任务
     *
     * @param request - CreateJobRequest
     *
     * @returns CreateJobResponse
     *
     * @param CreateJobRequest $request
     *
     * @return CreateJobResponse
     */
    public function createJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createJobWithOptions($request, $runtime);
    }

    /**
     * 删除应用分组.
     *
     * @param request - DeleteAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return DeleteAppResponse
     */
    public function deleteAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 删除应用分组.
     *
     * @param request - DeleteAppRequest
     *
     * @returns DeleteAppResponse
     *
     * @param DeleteAppRequest $request
     *
     * @return DeleteAppResponse
     */
    public function deleteApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteAppWithOptions($request, $runtime);
    }

    /**
     * 释放删除集群.
     *
     * @param request - DeleteClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return DeleteClusterResponse
     */
    public function deleteClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 释放删除集群.
     *
     * @param request - DeleteClusterRequest
     *
     * @returns DeleteClusterResponse
     *
     * @param DeleteClusterRequest $request
     *
     * @return DeleteClusterResponse
     */
    public function deleteCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteClusterWithOptions($request, $runtime);
    }

    /**
     * 批量删除任务
     *
     * @param tmpReq - DeleteJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new DeleteJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 批量删除任务
     *
     * @param request - DeleteJobsRequest
     *
     * @returns DeleteJobsResponse
     *
     * @param DeleteJobsRequest $request
     *
     * @return DeleteJobsResponse
     */
    public function deleteJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->deleteJobsWithOptions($request, $runtime);
    }

    /**
     * 批量导出任务信息.
     *
     * @param tmpReq - ExportJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ExportJobsResponse
     *
     * @param ExportJobsRequest $tmpReq
     * @param RuntimeOptions    $runtime
     *
     * @return ExportJobsResponse
     */
    public function exportJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new ExportJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->exportJobType) {
            @$body['ExportJobType'] = $request->exportJobType;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 批量导出任务信息.
     *
     * @param request - ExportJobsRequest
     *
     * @returns ExportJobsResponse
     *
     * @param ExportJobsRequest $request
     *
     * @return ExportJobsResponse
     */
    public function exportJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->exportJobsWithOptions($request, $runtime);
    }

    /**
     * 获取集群详细信息.
     *
     * @param request - GetClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return GetClusterResponse
     */
    public function getClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取集群详细信息.
     *
     * @param request - GetClusterRequest
     *
     * @returns GetClusterResponse
     *
     * @param GetClusterRequest $request
     *
     * @return GetClusterResponse
     */
    public function getCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getClusterWithOptions($request, $runtime);
    }

    /**
     * 获取指定机器信息.
     *
     * @param request - GetDesigateInfoRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetDesigateInfoResponse
     *
     * @param GetDesigateInfoRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return GetDesigateInfoResponse
     */
    public function getDesigateInfoWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取指定机器信息.
     *
     * @param request - GetDesigateInfoRequest
     *
     * @returns GetDesigateInfoResponse
     *
     * @param GetDesigateInfoRequest $request
     *
     * @return GetDesigateInfoResponse
     */
    public function getDesigateInfo($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getDesigateInfoWithOptions($request, $runtime);
    }

    /**
     * 获取任务执行的详情.
     *
     * @param request - GetJobExecutionProgressRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetJobExecutionProgressResponse
     *
     * @param GetJobExecutionProgressRequest $request
     * @param RuntimeOptions                 $runtime
     *
     * @return GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgressWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取任务执行的详情.
     *
     * @param request - GetJobExecutionProgressRequest
     *
     * @returns GetJobExecutionProgressResponse
     *
     * @param GetJobExecutionProgressRequest $request
     *
     * @return GetJobExecutionProgressResponse
     */
    public function getJobExecutionProgress($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getJobExecutionProgressWithOptions($request, $runtime);
    }

    /**
     * 查询日志.
     *
     * @param request - GetLogRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest  $request
     * @param RuntimeOptions $runtime
     *
     * @return GetLogResponse
     */
    public function getLogWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询日志.
     *
     * @param request - GetLogRequest
     *
     * @returns GetLogResponse
     *
     * @param GetLogRequest $request
     *
     * @return GetLogResponse
     */
    public function getLog($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getLogWithOptions($request, $runtime);
    }

    /**
     * 导入日历.
     *
     * @param request - ImportCalendarRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportCalendarResponse
     *
     * @param ImportCalendarRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ImportCalendarResponse
     */
    public function importCalendarWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->months) {
            @$body['Months'] = $request->months;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->year) {
            @$body['Year'] = $request->year;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 导入日历.
     *
     * @param request - ImportCalendarRequest
     *
     * @returns ImportCalendarResponse
     *
     * @param ImportCalendarRequest $request
     *
     * @return ImportCalendarResponse
     */
    public function importCalendar($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importCalendarWithOptions($request, $runtime);
    }

    /**
     * 批量导入任务
     *
     * @param request - ImportJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ImportJobsResponse
     *
     * @param ImportJobsRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ImportJobsResponse
     */
    public function importJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->autoCreateApp) {
            @$body['AutoCreateApp'] = $request->autoCreateApp;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->content) {
            @$body['Content'] = $request->content;
        }

        if (null !== $request->overwrite) {
            @$body['Overwrite'] = $request->overwrite;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 批量导入任务
     *
     * @param request - ImportJobsRequest
     *
     * @returns ImportJobsResponse
     *
     * @param ImportJobsRequest $request
     *
     * @return ImportJobsResponse
     */
    public function importJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->importJobsWithOptions($request, $runtime);
    }

    /**
     * 获取报警事件.
     *
     * @param request - ListAlarmEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAlarmEventResponse
     *
     * @param ListAlarmEventRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ListAlarmEventResponse
     */
    public function listAlarmEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取报警事件.
     *
     * @param request - ListAlarmEventRequest
     *
     * @returns ListAlarmEventResponse
     *
     * @param ListAlarmEventRequest $request
     *
     * @return ListAlarmEventResponse
     */
    public function listAlarmEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAlarmEventWithOptions($request, $runtime);
    }

    /**
     * 获取应用名字列表.
     *
     * @param request - ListAppNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppNamesResponse
     *
     * @param ListAppNamesRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListAppNamesResponse
     */
    public function listAppNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取应用名字列表.
     *
     * @param request - ListAppNamesRequest
     *
     * @returns ListAppNamesResponse
     *
     * @param ListAppNamesRequest $request
     *
     * @return ListAppNamesResponse
     */
    public function listAppNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppNamesWithOptions($request, $runtime);
    }

    /**
     * @param request - ListAppsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListAppsResponse
     */
    public function listAppsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListAppsRequest
     *
     * @returns ListAppsResponse
     *
     * @param ListAppsRequest $request
     *
     * @return ListAppsResponse
     */
    public function listApps($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppsWithOptions($request, $runtime);
    }

    /**
     * 获取日历名字列表.
     *
     * @param request - ListCalendarNamesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListCalendarNamesResponse
     *
     * @param ListCalendarNamesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListCalendarNamesResponse
     */
    public function listCalendarNamesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取日历名字列表.
     *
     * @param request - ListCalendarNamesRequest
     *
     * @returns ListCalendarNamesResponse
     *
     * @param ListCalendarNamesRequest $request
     *
     * @return ListCalendarNamesResponse
     */
    public function listCalendarNames($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listCalendarNamesWithOptions($request, $runtime);
    }

    /**
     * 查询实例列表.
     *
     * @param request - ListClustersRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     * @param RuntimeOptions      $runtime
     *
     * @return ListClustersResponse
     */
    public function listClustersWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询实例列表.
     *
     * @param request - ListClustersRequest
     *
     * @returns ListClustersResponse
     *
     * @param ListClustersRequest $request
     *
     * @return ListClustersResponse
     */
    public function listClusters($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listClustersWithOptions($request, $runtime);
    }

    /**
     * 查询Executor列表.
     *
     * @param request - ListExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return ListExecutorsResponse
     */
    public function listExecutorsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询Executor列表.
     *
     * @param request - ListExecutorsRequest
     *
     * @returns ListExecutorsResponse
     *
     * @param ListExecutorsRequest $request
     *
     * @return ListExecutorsResponse
     */
    public function listExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listExecutorsWithOptions($request, $runtime);
    }

    /**
     * 获取任务实例列表.
     *
     * @param request - ListJobExecutionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobExecutionsResponse
     *
     * @param ListJobExecutionsRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListJobExecutionsResponse
     */
    public function listJobExecutionsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取任务实例列表.
     *
     * @param request - ListJobExecutionsRequest
     *
     * @returns ListJobExecutionsResponse
     *
     * @param ListJobExecutionsRequest $request
     *
     * @return ListJobExecutionsResponse
     */
    public function listJobExecutions($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobExecutionsWithOptions($request, $runtime);
    }

    /**
     * @param request - ListJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     * @param RuntimeOptions  $runtime
     *
     * @return ListJobsResponse
     */
    public function listJobsWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * @param request - ListJobsRequest
     *
     * @returns ListJobsResponse
     *
     * @param ListJobsRequest $request
     *
     * @return ListJobsResponse
     */
    public function listJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listJobsWithOptions($request, $runtime);
    }

    /**
     * 获取executor的label列表.
     *
     * @param request - ListLablesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListLablesResponse
     *
     * @param ListLablesRequest $request
     * @param RuntimeOptions    $runtime
     *
     * @return ListLablesResponse
     */
    public function listLablesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取executor的label列表.
     *
     * @param request - ListLablesRequest
     *
     * @returns ListLablesResponse
     *
     * @param ListLablesRequest $request
     *
     * @return ListLablesResponse
     */
    public function listLables($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listLablesWithOptions($request, $runtime);
    }

    /**
     * 获取可用区列表.
     *
     * @param request - ListRegionZoneRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionZoneResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionZoneResponse
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
     * 获取可用区列表.
     *
     * @returns ListRegionZoneResponse
     *
     * @return ListRegionZoneResponse
     */
    public function listRegionZone()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionZoneWithOptions($runtime);
    }

    /**
     * 获取所有region列表.
     *
     * @param request - ListRegionsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListRegionsResponse
     *
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
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
     * 获取所有region列表.
     *
     * @returns ListRegionsResponse
     *
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * 查询调度事件.
     *
     * @param request - ListScheduleEventRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduleEventResponse
     *
     * @param ListScheduleEventRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduleEventResponse
     */
    public function listScheduleEventWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 查询调度事件.
     *
     * @param request - ListScheduleEventRequest
     *
     * @returns ListScheduleEventResponse
     *
     * @param ListScheduleEventRequest $request
     *
     * @return ListScheduleEventResponse
     */
    public function listScheduleEvent($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleEventWithOptions($request, $runtime);
    }

    /**
     * 获取指定时间类型和表达式未来5次调度时间.
     *
     * @param request - ListScheduleTimesRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns ListScheduleTimesResponse
     *
     * @param ListScheduleTimesRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return ListScheduleTimesResponse
     */
    public function listScheduleTimesWithOptions($request, $runtime)
    {
        $request->validate();
        $query = Utils::query($request->toMap());
        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 获取指定时间类型和表达式未来5次调度时间.
     *
     * @param request - ListScheduleTimesRequest
     *
     * @returns ListScheduleTimesResponse
     *
     * @param ListScheduleTimesRequest $request
     *
     * @return ListScheduleTimesResponse
     */
    public function listScheduleTimes($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listScheduleTimesWithOptions($request, $runtime);
    }

    /**
     * 指定执行器.
     *
     * @param tmpReq - OperateDesignateExecutorsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateDesignateExecutorsResponse
     *
     * @param OperateDesignateExecutorsRequest $tmpReq
     * @param RuntimeOptions                   $runtime
     *
     * @return OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutorsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateDesignateExecutorsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->addressList) {
            $request->addressListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->addressList, 'AddressList', 'json');
        }

        $body = [];
        if (null !== $request->addressListShrink) {
            @$body['AddressList'] = $request->addressListShrink;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->designateType) {
            @$body['DesignateType'] = $request->designateType;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->transferable) {
            @$body['Transferable'] = $request->transferable;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 指定执行器.
     *
     * @param request - OperateDesignateExecutorsRequest
     *
     * @returns OperateDesignateExecutorsResponse
     *
     * @param OperateDesignateExecutorsRequest $request
     *
     * @return OperateDesignateExecutorsResponse
     */
    public function operateDesignateExecutors($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDesignateExecutorsWithOptions($request, $runtime);
    }

    /**
     * 批量禁用任务
     *
     * @param tmpReq - OperateDisableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateDisableJobsResponse
     *
     * @param OperateDisableJobsRequest $tmpReq
     * @param RuntimeOptions            $runtime
     *
     * @return OperateDisableJobsResponse
     */
    public function operateDisableJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateDisableJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 批量禁用任务
     *
     * @param request - OperateDisableJobsRequest
     *
     * @returns OperateDisableJobsResponse
     *
     * @param OperateDisableJobsRequest $request
     *
     * @return OperateDisableJobsResponse
     */
    public function operateDisableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateDisableJobsWithOptions($request, $runtime);
    }

    /**
     * 批量启用任务
     *
     * @param tmpReq - OperateEnableJobsRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateEnableJobsResponse
     *
     * @param OperateEnableJobsRequest $tmpReq
     * @param RuntimeOptions           $runtime
     *
     * @return OperateEnableJobsResponse
     */
    public function operateEnableJobsWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateEnableJobsShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->jobIds) {
            $request->jobIdsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->jobIds, 'JobIds', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobIdsShrink) {
            @$body['JobIds'] = $request->jobIdsShrink;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 批量启用任务
     *
     * @param request - OperateEnableJobsRequest
     *
     * @returns OperateEnableJobsResponse
     *
     * @param OperateEnableJobsRequest $request
     *
     * @return OperateEnableJobsResponse
     */
    public function operateEnableJobs($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateEnableJobsWithOptions($request, $runtime);
    }

    /**
     * 运行一次任务
     *
     * @param request - OperateExecuteJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateExecuteJobResponse
     *
     * @param OperateExecuteJobRequest $request
     * @param RuntimeOptions           $runtime
     *
     * @return OperateExecuteJobResponse
     */
    public function operateExecuteJobWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->instanceParameters) {
            @$body['InstanceParameters'] = $request->instanceParameters;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->label) {
            @$body['Label'] = $request->label;
        }

        if (null !== $request->worker) {
            @$body['Worker'] = $request->worker;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 运行一次任务
     *
     * @param request - OperateExecuteJobRequest
     *
     * @returns OperateExecuteJobResponse
     *
     * @param OperateExecuteJobRequest $request
     *
     * @return OperateExecuteJobResponse
     */
    public function operateExecuteJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateExecuteJobWithOptions($request, $runtime);
    }

    /**
     * 重刷任务历史数据.
     *
     * @param request - OperateRerunJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateRerunJobResponse
     *
     * @param OperateRerunJobRequest $request
     * @param RuntimeOptions         $runtime
     *
     * @return OperateRerunJobResponse
     */
    public function operateRerunJobWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->dataTime) {
            @$query['DataTime'] = $request->dataTime;
        }

        if (null !== $request->endDate) {
            @$query['EndDate'] = $request->endDate;
        }

        if (null !== $request->jobId) {
            @$query['JobId'] = $request->jobId;
        }

        if (null !== $request->startDate) {
            @$query['StartDate'] = $request->startDate;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 重刷任务历史数据.
     *
     * @param request - OperateRerunJobRequest
     *
     * @returns OperateRerunJobResponse
     *
     * @param OperateRerunJobRequest $request
     *
     * @return OperateRerunJobResponse
     */
    public function operateRerunJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRerunJobWithOptions($request, $runtime);
    }

    /**
     * 重跑失败的任务实例.
     *
     * @param tmpReq - OperateRetryJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateRetryJobExecutionResponse
     *
     * @param OperateRetryJobExecutionRequest $tmpReq
     * @param RuntimeOptions                  $runtime
     *
     * @return OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateRetryJobExecutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskList) {
            $request->taskListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->taskListShrink) {
            @$query['TaskList'] = $request->taskListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 重跑失败的任务实例.
     *
     * @param request - OperateRetryJobExecutionRequest
     *
     * @returns OperateRetryJobExecutionResponse
     *
     * @param OperateRetryJobExecutionRequest $request
     *
     * @return OperateRetryJobExecutionResponse
     */
    public function operateRetryJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateRetryJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 停止正在运行的任务实例.
     *
     * @param tmpReq - OperateStopJobExecutionRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns OperateStopJobExecutionResponse
     *
     * @param OperateStopJobExecutionRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return OperateStopJobExecutionResponse
     */
    public function operateStopJobExecutionWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new OperateStopJobExecutionShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->taskList) {
            $request->taskListShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->taskList, 'TaskList', 'json');
        }

        $query = [];
        if (null !== $request->appName) {
            @$query['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->jobExecutionId) {
            @$query['JobExecutionId'] = $request->jobExecutionId;
        }

        if (null !== $request->taskListShrink) {
            @$query['TaskList'] = $request->taskListShrink;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 停止正在运行的任务实例.
     *
     * @param request - OperateStopJobExecutionRequest
     *
     * @returns OperateStopJobExecutionResponse
     *
     * @param OperateStopJobExecutionRequest $request
     *
     * @return OperateStopJobExecutionResponse
     */
    public function operateStopJobExecution($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->operateStopJobExecutionWithOptions($request, $runtime);
    }

    /**
     * 更新应用分组.
     *
     * @param request - UpdateAppRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateAppResponse
     *
     * @param UpdateAppRequest $request
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateAppResponse
     */
    public function updateAppWithOptions($request, $runtime)
    {
        $request->validate();
        $body = [];
        if (null !== $request->accessToken) {
            @$body['AccessToken'] = $request->accessToken;
        }

        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->enableLog) {
            @$body['EnableLog'] = $request->enableLog;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->title) {
            @$body['Title'] = $request->title;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 更新应用分组.
     *
     * @param request - UpdateAppRequest
     *
     * @returns UpdateAppResponse
     *
     * @param UpdateAppRequest $request
     *
     * @return UpdateAppResponse
     */
    public function updateApp($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppWithOptions($request, $runtime);
    }

    /**
     * 更新集群.
     *
     * @param request - UpdateClusterRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return UpdateClusterResponse
     */
    public function updateClusterWithOptions($request, $runtime)
    {
        $request->validate();
        $query = [];
        if (null !== $request->clusterId) {
            @$query['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->clusterName) {
            @$query['ClusterName'] = $request->clusterName;
        }

        $req = new OpenApiRequest([
            'query' => Utils::query($query),
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
     * 更新集群.
     *
     * @param request - UpdateClusterRequest
     *
     * @returns UpdateClusterResponse
     *
     * @param UpdateClusterRequest $request
     *
     * @return UpdateClusterResponse
     */
    public function updateCluster($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateClusterWithOptions($request, $runtime);
    }

    /**
     * 更新任务信息.
     *
     * @param tmpReq - UpdateJobRequest
     * @param runtime - runtime options for this request RuntimeOptions
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $tmpReq
     * @param RuntimeOptions   $runtime
     *
     * @return UpdateJobResponse
     */
    public function updateJobWithOptions($tmpReq, $runtime)
    {
        $tmpReq->validate();
        $request = new UpdateJobShrinkRequest([]);
        Utils::convert($tmpReq, $request);
        if (null !== $tmpReq->noticeConfig) {
            $request->noticeConfigShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeConfig, 'NoticeConfig', 'json');
        }

        if (null !== $tmpReq->noticeContacts) {
            $request->noticeContactsShrink = Utils::arrayToStringWithSpecifiedStyle($tmpReq->noticeContacts, 'NoticeContacts', 'json');
        }

        $body = [];
        if (null !== $request->appName) {
            @$body['AppName'] = $request->appName;
        }

        if (null !== $request->attemptInterval) {
            @$body['AttemptInterval'] = $request->attemptInterval;
        }

        if (null !== $request->calendar) {
            @$body['Calendar'] = $request->calendar;
        }

        if (null !== $request->childJobId) {
            @$body['ChildJobId'] = $request->childJobId;
        }

        if (null !== $request->clusterId) {
            @$body['ClusterId'] = $request->clusterId;
        }

        if (null !== $request->description) {
            @$body['Description'] = $request->description;
        }

        if (null !== $request->executorBlockStrategy) {
            @$body['ExecutorBlockStrategy'] = $request->executorBlockStrategy;
        }

        if (null !== $request->jobHandler) {
            @$body['JobHandler'] = $request->jobHandler;
        }

        if (null !== $request->jobId) {
            @$body['JobId'] = $request->jobId;
        }

        if (null !== $request->maxAttempt) {
            @$body['MaxAttempt'] = $request->maxAttempt;
        }

        if (null !== $request->maxConcurrency) {
            @$body['MaxConcurrency'] = $request->maxConcurrency;
        }

        if (null !== $request->name) {
            @$body['Name'] = $request->name;
        }

        if (null !== $request->noticeConfigShrink) {
            @$body['NoticeConfig'] = $request->noticeConfigShrink;
        }

        if (null !== $request->noticeContactsShrink) {
            @$body['NoticeContacts'] = $request->noticeContactsShrink;
        }

        if (null !== $request->parameters) {
            @$body['Parameters'] = $request->parameters;
        }

        if (null !== $request->priority) {
            @$body['Priority'] = $request->priority;
        }

        if (null !== $request->routeStrategy) {
            @$body['RouteStrategy'] = $request->routeStrategy;
        }

        if (null !== $request->startTime) {
            @$body['StartTime'] = $request->startTime;
        }

        if (null !== $request->timeExpression) {
            @$body['TimeExpression'] = $request->timeExpression;
        }

        if (null !== $request->timeType) {
            @$body['TimeType'] = $request->timeType;
        }

        if (null !== $request->timezone) {
            @$body['Timezone'] = $request->timezone;
        }

        $req = new OpenApiRequest([
            'body' => Utils::parseToMap($body),
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
     * 更新任务信息.
     *
     * @param request - UpdateJobRequest
     *
     * @returns UpdateJobResponse
     *
     * @param UpdateJobRequest $request
     *
     * @return UpdateJobResponse
     */
    public function updateJob($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateJobWithOptions($request, $runtime);
    }
}
